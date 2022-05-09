@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_article') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('articles.edit', ['article' => $article]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $article->title])
                    @include('fields.textarea', ['name' => 'text', 'value' => $article->text])
                    @include('fields.image', ['name' => 'image'])
                    <x-common.categories :selected="$article->category->id" />
                    <x-admin.statuses statuses="App\Enums\Blog\ArticleStatuses" label="article" :selected="$article->status" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
