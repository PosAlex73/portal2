<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Facades\Alert;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.images.index', [
            'images' => $images
        ]);
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(ImageRequest $imageRequest)
    {
        $fields = $imageRequest->validated();

        if ($imageRequest->hasFile('path')) {
            $fields['path'] = $imageRequest->file('path')->store('images/images', 'public');
        } else {
            return abort(500);
        }

        Image::create($fields);
        Alert::flash('status', __('vars.image_was_created'));

        return redirect()->route('images.index');
    }

    public function edit(Image $image)
    {
        return view('admin.images.edit', [
            'image' => $image
        ]);
    }

    public function update(ImageRequest $request, Image $image)
    {
        $fields = $request->validated();
        if ($request->hasFile('image')) {
            $fields['path'] = $request->file('image')->store('images/images', 'public');
            Storage::delete($image['path']);
        } else {
            return abort(500);
        }

        $image->update($fields);
        Alert::flash('status', __('vars.image_was_updated'));

        return redirect()->route('images.index');
    }

    public function destroy(Request $request)
    {
        $ids = $request->get('ids');
        Image::destroy($ids);

        Alert::flash('status', __('vars.images_were_delete'));

        return redirect()->route('images.index');
    }
}
