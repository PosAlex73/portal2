@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('appnews.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.rich_text', ['name' => 'description'])
                    @include('fields.image', ['name' => 'image'])
                    <x-admin.statuses statuses="App\Enums\CommonStatuses" label="new" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
