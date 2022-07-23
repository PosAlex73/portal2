<?php

namespace App\Http\Controllers\Front;

use App\Enums\CommonStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\AppNew;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = AppNew::where([
            'status' => CommonStatuses::ACTIVE
        ])->paginate(Set::get(SettingTypes::FRONT_PAGINATION));

        return view('front.news.index', [
            'news' => $news
        ]);
    }

    public function show(AppNew $new)
    {
        return view('front.news.show', ['new' => $new]);
    }
}
