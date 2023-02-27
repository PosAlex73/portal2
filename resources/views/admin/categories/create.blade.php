@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_category') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.number', ['name' => 'position'])
                    <x-common.common-statuses-select />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
