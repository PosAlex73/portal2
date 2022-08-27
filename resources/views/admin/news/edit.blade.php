@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_new') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('appnews.update', ['appnews' => $new]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $new->title])
                    @include('fields.rich_text', ['name' => 'description', 'value' => $new->description])
                    @include('fields.image', ['name' => 'image', 'file' => 'c' . $new->image])
                    <x-admin.statuses statuses="App\Enums\CommonStatuses" label="new" :selected="$new->status" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
