<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThreadMessageRequest;
use App\Http\Requests\UpdateThreadMessageRequest;
use App\Models\ThreadMessage;

class ThreadMessageController extends Controller
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
     * @param  \App\Http\Requests\StoreThreadMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreadMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThreadMessage  $threadMessage
     * @return \Illuminate\Http\Response
     */
    public function show(ThreadMessage $threadMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThreadMessage  $threadMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(ThreadMessage $threadMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThreadMessageRequest  $request
     * @param  \App\Models\ThreadMessage  $threadMessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThreadMessageRequest $request, ThreadMessage $threadMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThreadMessage  $threadMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThreadMessage $threadMessage)
    {
        //
    }
}
