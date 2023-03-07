<?php

use App\Http\Controllers\FacilityTypeController;
use App\Http\Controllers\AssessmentToolsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\AssessmentTools;
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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/abtc-form', function () {   
//     return Inertia::render('AbtcForm', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// })->name('abtc-form');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/facility-types', [FacilityTypeController::class, 'index']);


// Assessment Tools [AssessmentToolController::class, 'index']
//Route::get('/assessment-tool', [AssessmentToolsController::class, 'index'])->name('assessment-tool.show');
// Route::get('/assessment-tool', [AssessmentToolsController::class, 'index'])->name('assessment-tool.show');

Route::get('/assessment-tool', [AssessmentToolsController::class, 'index'])->name('assessment-tool.retrieve');

// Route::post('/assessment-tool', function (Request $request) {  
//     return Inertia::render('AssessmentTool', [
//                'assessmentTool' => $request
//     ]);
// })->name('assessment-tool.retrieve');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
