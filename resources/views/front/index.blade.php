@php

$mainHeroText = Set::get(\App\Enums\Settings\SettingTypes::MAIN_HERO);

@endphp

@extends('layouts.front')
@section('content')
    <div class="container">
        @if(!empty($mainHeroText))
            <div class="card">
                <div class="card-body">
                    {!! $mainHeroText !!}
                </div>
            </div>
        @endif

        <div class="row">
            @foreach($courses as $course)
                <div class="col-4">
                    <div class="card m-2">
                        <img src="{{ $course->image }}" alt="{{ $course->title }}" class="card-img-top">
                        <div class="card-header text-center">
                            <h5>{{ $course->title }}</h5>
                        </div>
                        <div class="card-body" style="height: 150px">{{ $course->short_description }}</div>
                        <div class="card-footer text-center">
                            <a class="btn btn-primary" href="{{ route('front.courses.course', ['course' => $course]) }}">
                                {{ __('vars.view_course') }}
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
