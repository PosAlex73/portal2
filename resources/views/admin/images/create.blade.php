@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.image', ['name' => 'path'])
                    <x-admin.statuses statuses="App\Enums\CommonStatuses" label="image" />
                    <x-admin.image-type />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
