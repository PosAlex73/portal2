@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_article') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('articles.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.textarea', ['name' => 'text'])
                    @include('fields.image', ['name' => 'image'])
                    <x-common.categories />
                    <x-admin.statuses statuses="App\Enums\Blog\ArticleStatuses" label="article" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
