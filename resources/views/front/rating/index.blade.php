@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">{{ __('vars.rating_not_ready_yet') }}</div>
        </div>
        <div class="card-body">
            {{ __('vars.rating_will_be_ready_soon') }}
        </div>
    </div>
@endsection
