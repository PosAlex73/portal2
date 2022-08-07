<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\StoreArticleRequest;
use App\Http\Requests\Admin\Pages\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with(['category'])->paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Pages\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $fields = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images/articles', 'public');
            $fields['image'] = $image;
        }

        $article = Article::create($fields);
        $request->session()->flash('status', __('vars.article_was_created'));

        return redirect()->route('articles.edit', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Pages\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $fields = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images/articles', 'public');
            $fields['image'] = $image;
        }

        $article->update($fields);
        $request->session()->flash('status', __('vars.article_was_updated'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('status', __('vars.article_was_deleted'));

        return redirect()->to(route('articles.index'));
    }
}
