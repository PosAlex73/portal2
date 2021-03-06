@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_course') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('plans.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.textarea', ['name' => 'description'])
                    @include('fields.input', ['name' => 'short_description'])
                    <x-common.common-statuses-select />
                    @include('fields.number', ['name' => 'price'])
                    @include('fields.image', ['name' => 'image'])
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
