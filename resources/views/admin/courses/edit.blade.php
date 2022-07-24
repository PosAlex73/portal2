@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_course') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('courses.update', ['course' => $course]) }}" method="post" enctype="multipart/form-data">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i>{{ __('vars.common_settings') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i>{{ __('vars.course_description') }}</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="pt-4">
                            @csrf
                            @method('PUT')
                            @include('fields.input', ['name' => 'title', 'value' => $course->title])
                            @include('fields.input', ['name' => 'short_description', 'value' => $course->short_description])
                            @include('fields.number', ['name' => 'price', 'value' => $course->price])
                            <x-common.categories :selected="$course->category_id" />
                            <x-admin.course-statuses :selected="$course->status" />
                            <x-admin.course-types :selected="$course->type"/>
                            @include('fields.image', ['name' => 'image', 'file' => 'c'. $course->image])
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="pt-4">
                            @include('fields.rich_text', ['name' => 'description', 'value' => $course->description])
                        </div>
                    </div>
                </div>
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection





