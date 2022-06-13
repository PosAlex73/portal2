@extends('layouts.front')
@section('content')
    <div class="row">
        <x-common.pagination route="front.courses" :items="$courses" />
        @forelse($courses as $course)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $course->image }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ $course->short_description }}</p>
                            <a class="badge-primary p-2" href="{{ route('front.courses', ['category_id' => $course->category->id]) }}">
                                {{ $course->category->title }}
                            </a>
                        </div>
                        <div class="card-footer">{{ $course->price }}</div>
                    </div>
                </div>
            </div>
        @empty
            <p>{{ __('vars.no_courses_found') }}</p>
        @endforelse
        <x-common.pagination route="front.courses" :items="$courses" />
    </div>
@endsection
