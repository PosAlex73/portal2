<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreUserProgressRequest;
use App\Http\Requests\Admin\Users\UpdateUserProgressRequest;
use App\Models\User;
use App\Models\UserProgress;

class UserProgressController extends Controller
{
    public function index()
    {
        $progress = UserProgress::with(['user', 'order'])->paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.progress.index', ['progress' => $progress]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(User $user)
    {
        $progress = UserProgress::with('course')->where('user_id', $user->id)->paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.users.progress_list', [
            'user' => $user,
            'progress' => $progress
        ]);
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
     * @param  \App\Http\Requests\Admin\Users\StoreUserProgressRequest  $request
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
     * @param  \App\Http\Requests\Admin\Users\UpdateUserProgressRequest  $request
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
