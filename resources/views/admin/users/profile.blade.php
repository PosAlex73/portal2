@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <x-admin.user-tabs :user="$user" />
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('users.profiles.update', ['profile' => $profile]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'phone', 'value' => $profile->phone])
                    @include('fields.input', ['name' => 'contacted_email', 'value' => $profile->contacted_email])
                    @include('fields.number', ['name' => 'age', 'value' => $profile->age])
                    @include('fields.key_select', ['name' => 'country', 'variants' => $countries, 'selected' => $profile->country])
                    @include('fields.number', ['name'=> 'experience', 'value' => $profile->experience])
                    @include('fields.textarea', ['name' => 'about', 'value' => $profile->about])
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
