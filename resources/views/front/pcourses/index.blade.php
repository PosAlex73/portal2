@extends('layouts.front')
@section('content')
    <div class="row">
        <x-common.pagination route="front.courses" :items="$courses" />
        @forelse($courses as $course)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <x-common.image :image="$course->image"/>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="{{ route('front.pcourse', ['pcourse' => $course->id]) }}">
                                    {{ $course->title }}
                                </a>
                            </h3>
                            <div class="card-footer"><x-common.currency :value="$course->price" /></div>

                            <p class="card-text">{{ $course->short_description }}</p>
                            <a class="badge-primary p-2" href="{{ route('front.pcourses', ['category_id' => $course->category->id]) }}">
                                {{ $course->category->title }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="card">
                <div class="card-body">
                    <p>{{ __('vars.no_courses_found') }}</p>
                </div>
            </div>
        @endforelse
        <x-common.pagination route="front.courses" :items="$courses" />
    </div>
@endsection
