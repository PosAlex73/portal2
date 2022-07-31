<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Facades\Alert;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\System\PathnoteRequest;
use App\Models\Pathnote;
use Illuminate\Http\Request;

class PathController extends Controller
{
    public function index()
    {
        $paths = Pathnote::paginate(Set::get(SettingTypes::FRONT_PAGINATION));

        return view('admin.paths.index', [
            'paths' => $paths
        ]);
    }

    public function store(PathnoteRequest $request)
    {
        $fields = $request->validated();
        Pathnote::create($fields);

        Alert::flash('status', __('vars.path_not_created'));

        return redirect()->route('paths.index');
    }

    public function destroy(Request $request)
    {
        $ids = $request->get('path_ids');
        Pathnote::destroy($ids);

        Alert::flash('status', __('vars.path_was_deleted'));

        return redirect()->back();
    }
}
