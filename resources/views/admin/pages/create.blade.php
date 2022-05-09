@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_page') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('pages.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.textarea', ['name' => 'text'])
                    @include('fields.image', ['name' => 'image'])
                    @include('fields.input', ['name' => 'url'])
                    <x-common.categories />
                    <x-admin.statuses statuses="App\Enums\CommonStatuses" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
