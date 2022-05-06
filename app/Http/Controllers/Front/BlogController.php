<?php

namespace App\Http\Controllers\Front;

use App\Enums\Blog\ArticleStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\Article;

class BlogController extends Controller
{
    public function blog()
    {
        $articles = Article::where(['status' => ArticleStatuses::ACTIVE])->paginate(Set::get(SettingTypes::FRONT_PAGINATION));

        return view('front.blog.index', ['articles' => $articles]);
    }

    public function article(Article $article)
    {
        return view('front.blog.article', ['article' => $article]);
    }
}
