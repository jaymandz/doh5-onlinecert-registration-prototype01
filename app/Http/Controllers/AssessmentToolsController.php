<?php

namespace App\Http\Controllers;

use App\Models\AssessmentTools;
use App\Http\Requests\StoreAssessmentToolsRequest;
use App\Http\Requests\UpdateAssessmentToolsRequest;
use App\Models\Facilities;
use Illuminate\Http\Request;
use Inertia\Inertia;
class AssessmentToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tool = AssessmentTools::where([
            ['facility_id', $request->selected_facility],
            ['program_id', $request->selected_program]
        ])->first();

        $chosenFaci = Facilities::where('id', $request->selected_facility)->first();

        return Inertia::render('AssessmentTool', [
            'tools' => $tool,
            'facility_data' => $chosenFaci
        ]);
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
    public function store(StoreAssessmentToolsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AssessmentTools $assessmentTools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssessmentTools $assessmentTools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssessmentToolsRequest $request, AssessmentTools $assessmentTools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssessmentTools $assessmentTools)
    {
        //
    }
}
