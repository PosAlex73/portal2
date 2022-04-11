<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreThreadRequest;
use App\Http\Requests\Admin\Users\UpdateThreadRequest;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::paginate(SettingTypes::ADMIN_PAGINATION);

        return view('admin.threads.index', ['threads' => $threads]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        return view('admin.threads.edit', ['thread' => $thread]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Users\UpdateThreadRequest  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        $status = $request->get('status');
        $thread->update(['status' => $status]);
        session()->flash('status', __('vars.thread_was_updated'));

        return redirect()->back();
    }
}
