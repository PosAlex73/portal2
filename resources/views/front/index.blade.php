@extends('layouts.front')
@section('content')
    <div class="card text-center">
        <div class="card-body">
            <h1>{{ Set::get('main_hero') }}</h1>
        </div>
    </div>
@endsection
