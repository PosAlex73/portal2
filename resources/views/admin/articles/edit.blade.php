@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_article') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('articles.update', ['article' => $article]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $article->title])
                    @include('fields.rich_text', ['name' => 'text', 'value' => $article->text])
                    @include('fields.image', ['name' => 'image', 'file' => 'c' . $article->image])
                    <x-common.categories :selected="$article->category->id" />
                    <x-admin.statuses statuses="App\Enums\Blog\ArticleStatuses" label="article" :selected="$article->status" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
