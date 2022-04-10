<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreUserSettingRequest;
use App\Http\Requests\Admin\Users\UpdateUserSettingRequest;
use App\Models\UserSetting;

class UserSettingController extends Controller
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
     * @param  \App\Http\Requests\Admin\Users\StoreUserSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSetting  $userSetting
     * @return \Illuminate\Http\Response
     */
    public function show(UserSetting $userSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSetting  $userSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSetting $userSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Users\UpdateUserSettingRequest  $request
     * @param  \App\Models\UserSetting  $userSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserSettingRequest $request, UserSetting $userSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSetting  $userSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSetting $userSetting)
    {
        //
    }
}
