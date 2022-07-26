@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_course') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
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
                                @include('fields.input', ['name' => 'title'])
                                @include('fields.input', ['name' => 'short_description'])
                                @include('fields.number', ['name' => 'price'])
                                <x-common.categories />
                                <x-admin.course-statuses />
                                <x-admin.course-types />
                                @include('fields.image', ['name' => 'image'])
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="pt-4">
                                @include('fields.rich_text', ['name' => 'description'])
                            </div>
                        </div>
                    </div>
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
