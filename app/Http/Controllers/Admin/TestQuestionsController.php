<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Facades\Alert;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTestQuestionRequest;
use App\Models\PracticeTask;
use App\Models\TestQuestion;
use Illuminate\Http\Request;

class TestQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = TestQuestion::paginate(Set::get(SettingTypes::FRONT_PAGINATION));

        return view('admin.questions.index', [
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestQuestionRequest $request)
    {
        $fields = $request->validated();
        TestQuestion::create($fields);

        Alert::flash('status', __('vars.test_created'));

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestQuestion  $testQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(TestQuestion $testQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestQuestion  $testQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(TestQuestion $testQuestion)
    {
        return view('admin.questions.edit', [
            'question' => $testQuestion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestQuestion  $testQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTestQuestionRequest $request, TestQuestion $testQuestion)
    {
        $fields = $request->validated();
        $testQuestion->update($fields);

        Alert::flash('status', __('vars.test_updated'));

        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestQuestion  $testQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestQuestion $testQuestion)
    {
        $testQuestion->delete();

        Alert::flash('status', __('vars.test_deleted'));

        return redirect()->route('questions.index');
    }
}
