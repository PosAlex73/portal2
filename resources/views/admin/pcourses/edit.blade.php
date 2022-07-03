@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_course') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('courses.update', ['course' => $course]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $course->title])
                    @include('fields.textarea', ['name' => 'description', 'value' => $course->description])
                    @include('fields.input', ['name' => 'short_description', 'value' => $course->short_description])
                    @include('fields.number', ['name' => 'price', 'value' => $course->price])
                    <x-common.categories :selected="$course->category_id" />
                    <x-admin.course-statuses :selected="$course->status" />
                    <x-admin.course-types :selected="$course->type"/>
                    @include('fields.image', ['name' => 'image'])
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
