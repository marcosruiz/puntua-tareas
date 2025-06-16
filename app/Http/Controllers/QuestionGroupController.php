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
        //

        $questionGroup = QuestionGroup::paginate(25);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
