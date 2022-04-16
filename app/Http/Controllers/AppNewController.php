<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppNewRequest;
use App\Http\Requests\UpdateAppNewRequest;
use App\Models\AppNew;

class AppNewController extends Controller
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
     * @param  \App\Http\Requests\StoreAppNewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppNewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppNew  $appNew
     * @return \Illuminate\Http\Response
     */
    public function show(AppNew $appNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppNew  $appNew
     * @return \Illuminate\Http\Response
     */
    public function edit(AppNew $appNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppNewRequest  $request
     * @param  \App\Models\AppNew  $appNew
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppNewRequest $request, AppNew $appNew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppNew  $appNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppNew $appNew)
    {
        //
    }
}
