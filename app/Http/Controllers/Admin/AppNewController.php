<?php

namespace App\Http\Controllers\Admin;

use App\Alerts\Alert;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
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
        $news = AppNew::paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.news.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppNewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppNewRequest $request)
    {
        $fields = $request->validated();
        AppNew::create($fields);

        Alert::flash('status', __('vars.new_was_created'));

        return redirect()->route('appnews.index');
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
    public function edit(AppNew $appnews)
    {
        return view('admin.news.edit', ['new' => $appnews]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppNewRequest  $request
     * @param  \App\Models\AppNew  $appNew
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppNewRequest $request, AppNew $appnews)
    {
        $fields = $request->validated();
        $appnews->update($fields);

        Alert::flash('status', __('vars.new_was_update'));

        return redirect()->route('appnews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppNew  $appNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppNew $appnews)
    {
        $appnews->delete();

        Alert::flash('status', __('news_was_deleted'));

        return back();
    }
}
