<?php

namespace App\Http\Controllers\Front;

use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\SearchRequest;
use App\Models\AppNew;
use App\Models\Article;
use App\Models\Course;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    public function search(SearchRequest $request)
    {
        $result = new Collection();
        if ($request->has('search')) {
            $search_text = $request->safe()->only('search')['search'];
            $result['courses'] = Course::SearchText($search_text)->limit(Set::get(SettingTypes::FRONT_PAGINATION))->get();
            $result['articles'] = Article::SearchText($search_text)->limit(Set::get(SettingTypes::FRONT_PAGINATION))->get();
            $result['news'] = AppNew::SearchText($search_text)->limit(Set::get(SettingTypes::FRONT_PAGINATION))->get();
        }

        return view('front.search.index', [
            'result' => $result,
            'search' => $search_text ?? ''
        ]);
    }
}
