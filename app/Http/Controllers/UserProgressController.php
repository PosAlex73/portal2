<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserProgressRequest;
use App\Http\Requests\UpdateUserProgressRequest;
use App\Models\UserProgress;

class UserProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserProgressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProgressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function show(UserProgress $userProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProgress $userProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProgressRequest  $request
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProgressRequest $request, UserProgress $userProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProgress  $userProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProgress $userProgress)
    {
        //
    }
}
