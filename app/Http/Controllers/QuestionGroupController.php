<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\QuestionGroup;
use Inertia\Response;
use App\Http\Requests\QuestionGroupRequest;
use Illuminate\Support\Facades\Auth;

class QuestionGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        define('NUMBER_OF_ITEMS_PER_PAGE', 25);
        $questionGroup = QuestionGroup::where('user_id', auth()->id())->paginate(NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('questiongroups/Index', ['questionGroups' => $questionGroup]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('questiongroups/Create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param App\Http\Requests\QuestionGroupRequest
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionGroupRequest $request)
    {
        //QuestionGroup::create($request->validated());
        Auth::user()->questionGroups()->create($request->validated());
        return redirect()->route('question-groups.index')->with('success', 'Question group created or updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionGroup $questionGroup)
    {
        return inertia('questiongroups/Edit', ['questionGroup' => $questionGroup]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param App\Http\Requests\QuestionGroupRequest
     * @param App\Models\QuestionGroup
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionGroupRequest $request, QuestionGroup $questionGroup)
    {
        $questionGroup->update($request->validated());
        return redirect()->route('question-groups.index')->with('success', 'Question group updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionGroup $questionGroup)
    {
        $questionGroup->delete();
        return redirect()->route('question-groups.index')->with('success', 'Question group deleted successfully.');
    }
}
