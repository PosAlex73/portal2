@extends('layouts.admin')
@section('content')
    <x-bread-crumbs />
    @include('flash.errors')
    <div class="card">
        <x-admin.user-tabs :user="$user" />
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'first_name', 'value' => $user->first_name])
                    @include('fields.input', ['name' => 'last_name', 'value' => $user->last_name])
                    @include('fields.select', ['name' => 'status', 'variants' => $user_statuses, 'selected' => $user->status])
                    @include('fields.select', ['name' => 'type', 'variants' => $user_types, 'selected' => $user->type])
                    @include('fields.email', ['name' => 'email', 'value' => $user->email])
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
