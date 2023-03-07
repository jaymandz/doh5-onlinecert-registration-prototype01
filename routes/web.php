<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use League\Csv\Info;
use League\Csv\Reader;

use App\Models\Barangay;
use App\Models\CityMunicipality;
use App\Models\Facility;
use App\Models\FacilityType;
use App\Models\Province;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard/{success_type?}', function (string $success_type = null) {
    return Inertia::render('Dashboard', [
        'successType' => $success_type,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

# Routes created by Jay Mandane
Route::get('/facilities', function() {
    return Inertia::render('Facilities/List');
});

Route::get('/facilities/importCsv', function(Request $request) {
    return Inertia::render('Facilities/ImportCsv', [
        'csrfToken' => csrf_token(),
    ]);
});

Route::post('/facilities/importCsv', function(Request $request) {
    $facilities = Reader::createFromPath($request->csv_file, 'r');
    $facilities->setHeaderOffset(0);

    foreach ($facilities->getRecords() as $offset => $record)
    {
        $tq = FacilityType::where('name', $record['Health Facility Type']);
        if ($tq->count() == 0)
        {
            $facility_type = new FacilityType;
            $facility_type->name = $record['Health Facility Type'];
            $facility_type->save();
        }
        else
        {
            $facility_type = $tq->first();
        }

        $pq = Province::where('name', $record['Province Name'])->orWhere('psgc', $record['Province PSGC']);
        if ($pq->count() == 0)
        {
            $province = new Province;
            $province->psgc = $record['Province PSGC'];
            $province->name = $record['Province Name'];
            $province->save();
        }
        else
        {
            $province = $pq->first();
        }

        $cmq = CityMunicipality::where('province_id', $province->id)->where(function(Builder $query) use ($record) {
            $query->where('name', $record['City/Municipality Name'])->orWhere('psgc', $record['City/Municipality PSGC']);
        });
        if ($cmq->count() == 0)
        {
            $city_municipality = new CityMunicipality;
            $city_municipality->province_id = $province->id;
            $city_municipality->psgc = $record['City/Municipality PSGC'];
            $city_municipality->name = $record['City/Municipality Name'];
            $city_municipality->save();
        }
        else
        {
            $city_municipality = $cmq->first();
        }

        $bq = Barangay::where('city_municipality_id', $city_municipality->id)->where(function(Builder $query) use ($record) {
            $query->where('name', $record['Barangay Name'])->orWhere('psgc', $record['Barangay PSGC']);
        });
        if ($bq->count() == 0)
        {
            $barangay = new Barangay;
            $barangay->city_municipality_id = $city_municipality->id;
            $barangay->psgc = $record['Barangay PSGC'];
            $barangay->name = $record['Barangay Name'];
            $barangay->save();
        }
        else
        {
            $barangay = $bq->first();
        }

        $fq = Facility::where('short_code', $record['Health Facility Code Short']);
        if ($fq->count() == 0)
        {
            $facility = new Facility;
            $facility->short_code = $record['Health Facility Code Short'];
        }
        else
        {
            $facility = $fq->first();
        }

        $facility->name = $record['Facility Name'];
        $facility->old_name1 = $record['Old Health Facility Name 1'];
        $facility->old_name2 = $record['Old Health Facility Name 2'];
        $facility->old_name3 = $record['Old Health Facility Name 3'];
        $facility->facility_type_id = $facility_type->id;
        $facility->ownership_major_classif = $record['Ownership Major Classification'];
        $facility->street_name = $record['Street Name and #'];
        $facility->building_name = $record['Building name and #'];
        $facility->barangay_id = $barangay->id;
        $facility->zip_code = $record['Zip Code'] ? intval($record['Zip Code']) : null;
        $facility->landline_no1 = $record['Landline Number'];
        $facility->landline_no2 = $record['Landline Number 2'];
        $facility->fax_no = $record['Fax Number'];
        $facility->email_address = $record['Email Address'];
        $facility->alternate_email_address = $record['Alternate Email Address'];
        $facility->official_website = $record['Official Website'];
        $facility->service_capability = $record['Service Capability'];
        $facility->bed_capacity = $record['Bed Capacity'] ? intval($record['Bed Capacity']) : null;
        $facility->is_with_license = str_contains($record['Licensing Status'], 'With License');

        $lvd = date_create_from_format('m/d/Y', $record['License Validity Date']);
        if ($lvd) $facility->license_validity_date = $lvd;

        $facility->save();
    }

    return redirect('/dashboard/sImport');
});

require __DIR__.'/auth.php';
