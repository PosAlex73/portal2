<?php

namespace App\Http\Controllers\Front;

use App\Alerts\Alert;
use App\Enums\Blog\ArticleStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Blog\StoreArticleCommentRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function publicComment(StoreArticleCommentRequest $request, Article $article)
    {
        $fields = $request->safe()->only(['article_id', 'text']);
        $user_id = Auth::user()->id;

        $validator = Validator::make(['user_id' => $user_id], [
            'user_id' => 'required|exists:user,id',
        ]);

        if ($validator->fails()) {
            return redirect('')
                ->back()
                ->withErrors($validator);
        }

        $fields['user_id'] = $user_id;
        $article->comments()->update($fields);
        Alert::set('status', __('comment_was_add'));

        return redirect()->back();
    }
}
