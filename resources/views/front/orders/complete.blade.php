@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-header"><h3 class="card-title m-2">{{ __('vars.checkout_complete') }}</h3></div>
        <div class="card-body">
            <p>{{ __('vars.checkout_complete') }}</p>
            <a href="{{ route('front.user') }}" class="btn btn-primary">{{ __('vars.go_to_profile') }}</a>
        </div>
    </div>
@endsection
