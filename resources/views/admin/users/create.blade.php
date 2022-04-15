@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_user') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'first_name'])
                    @include('fields.input', ['name' => 'last_name'])
                    @include('fields.select', ['name' => 'status', 'variants' => $user_statuses])
                    @include('fields.select', ['name' => 'type', 'variants' => $user_types])
                    @include('fields.email', ['name' => 'email'])
                    @include('fields.password', ['name' => 'password'])
                    @include('fields.password', ['name' => 'password_confirmation'])
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
