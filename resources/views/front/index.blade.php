@extends('layouts.front')
@section('content')
    <div class="card text-center">
        <div class="card-body">
            <h1>{!! Set::get(\App\Enums\Settings\SettingTypes::MAIN_HERO) !!}</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-title text-center m-2">{{ __('vars.choice_tariff') }}</div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card p-2">{{ __('vars.first_step') }}</div>
            </div>
            <div class="col-3">
                <div class="card p-2">123</div>
            </div>
            <div class="col-3">
                <div class="card p-2">123</div>
            </div>
        </div>
    </div>

@endsection
