<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Enums\Thread\MessageStatuses;
use App\Events\NewMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreThreadMessageRequest;
use App\Http\Requests\Admin\Users\StoreThreadRequest;
use App\Http\Requests\Admin\Users\UpdateThreadRequest;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thread(User $user)
    {
        $thread = $user->thread;

        return view('admin.users.thread', [
            'user' => $user,
            'thread' => $thread
        ]);
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

    public function sendMessage(StoreThreadMessageRequest $request, Thread $thread)
    {
        $fields = $request->safe()->only(['message']);
        $user = $thread->user;

        $message = $thread->messages()->create([
            'message' => $fields['message'],
            'owner_id' => Auth::id(),
            'user_id' => $user->id,
            'status' => MessageStatuses::UNREAD
        ]);

        event(new NewMessage($message, $thread, $user));

        return back();
    }
}
