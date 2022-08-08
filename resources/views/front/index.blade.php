@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Set::get(\App\Enums\Settings\SettingTypes::MAIN_HERO) !!}
            </div>
        </div>
        @foreach($categories as $category)

        @endforeach
    </div>
@endsection
