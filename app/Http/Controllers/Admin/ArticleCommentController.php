<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\StoreArticleCommentRequest;
use App\Http\Requests\Admin\Pages\UpdateArticleCommentRequest;
use App\Models\Article;
use App\Models\ArticleComment;

class ArticleCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article)
    {
        $comments = $article->comments;

        return view('admin.article.comments', [
            'comments' => $comments, 'article' => $article
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Pages\StoreArticleCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleCommentRequest $request, Article $article)
    {
        $fields = $request->validated();
        $article->comments()->create($fields);

        $request->session()->flash('status', __('vars.comment_was_created'));

        return redirect()->to(route('article_comments.index', ['article' => $article]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Pages\UpdateArticleCommentRequest  $request
     * @param  \App\Models\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleCommentRequest $request, ArticleComment $articleComment)
    {
        $fields = $request->validated();
        $articleComment->update($fields);

        $request->session()->flash('status', __('vars.comment_was_updated'));

        return redirect()->to(route('article_comments.index', ['article' => $articleComment->article->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleComment $articleComment)
    {
        $articleComment->delete();
        session()->flash('status', __('vars.comment_was_deleted'));

        return redirect()->to('article_comments.index', ['article' => $articleComment->article->id]);
    }
}
