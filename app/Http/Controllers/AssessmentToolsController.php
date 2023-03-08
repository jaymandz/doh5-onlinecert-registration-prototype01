<?php

namespace App\Http\Controllers;

use App\Models\AssessmentTools;
use App\Http\Requests\StoreAssessmentToolsRequest;
use App\Http\Requests\UpdateAssessmentToolsRequest;
use App\Models\Facilities;
use App\Models\Subgoals;
use Illuminate\Http\Request;
use Inertia\Inertia;
class AssessmentToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $chosenFacility = Facilities::where('health_faci_code', 'LIKE', "%{$request->health_faci_code}%")->first();

        $tool = AssessmentTools::where([
            ['facility_id', $chosenFacility->id],
            ['program_id', $request->selected_program]
        ])->first();

        return Inertia::render('AssessmentTool', [
            'tools' => $tool,
            'facility_data' => $chosenFacility
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
    public function update(Request $request)
    {

       // dd($request);
        // $tool = AssessmentTools::where('id', $request->tool_id)->update(
        //     ['evidence_of_progress' => $request->evidence_of_progress,
        //     'center_rating' => $request->center_rating['center_rating']]
        // );

        // $tool2 = Subgoals::where([
        //     ['id', $request->subgoal_id],
        //     ['asessment_tool_id', $request->tool_id]
        // ],
        // )->update(
        //     ['evidence_of_progress' => $request->evidence_of_progress_sub,
        //     'center_rating' => $request->center_rating_sub['center_rating_sub']]
        // );

        // return Inertia::render([
        //     'toolMain' => $tool,
        //     'subGoals' => $tool2
        // ]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssessmentTools $assessmentTools)
    {
        //
    }
}
