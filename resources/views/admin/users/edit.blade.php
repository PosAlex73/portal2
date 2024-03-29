@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <x-admin.user-tabs :user="$user" />
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('users.update', ['user' => $user]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'first_name', 'value' => $user->first_name])
                    @include('fields.input', ['name' => 'last_name', 'value' => $user->last_name])
                    @include('fields.select', ['name' => 'status', 'ai' => 'user_status_', 'variants' => $user_statuses, 'selected' => $user->status])
                    @include('fields.select', ['name' => 'type', 'ai' => 'user_type_', 'variants' => $user_types, 'selected' => $user->type])
                    @include('fields.email', ['name' => 'email', 'value' => $user->email])
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
