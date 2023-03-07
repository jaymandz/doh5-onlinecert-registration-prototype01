<?php

namespace App\Http\Controllers;

use App\Models\AssessmentTools;
use App\Models\Facilities;
use App\Http\Requests\StoreFacilityTypeRequest;
use App\Http\Requests\UpdateFacilityTypeRequest;

class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Facilities::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacilityTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FacilityType $facilityType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacilityType $facilityType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacilityTypeRequest $request, FacilityType $facilityType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FacilityType $facilityType)
    {
        //
    }
}
