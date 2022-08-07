@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_page') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('pages.update', ['page' => $page]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $page->title])
                    @include('fields.textarea', ['name' => 'text', 'value' => $page->text])
                    @include('fields.image', ['name' => 'image'])
                    @include('fields.input', ['name' => 'url', 'value' => $page->url])
                    <x-common.categories :selected="$page->category->category_id" />
                    <x-admin.statuses statuses="App\Enums\CommonStatuses" :selected="$page->status" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
