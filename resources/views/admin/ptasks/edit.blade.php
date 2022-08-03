@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_practice_task') }}</h4>
            <a href="{{ route('pcourses.edit', ['pcourse' => $task->course]) }}" class="btn btn-primary">{{ __('vars.view_course') }}</a>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('ptasks.update', ['ptask' => $task]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="default-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i>{{ __('vars.common_settings') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i>{{ __('vars.description') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="pt-4">
                                    @include('fields.input', ['name' => 'title', 'value' => $task->title])
                                    @include('fields.rich_text', ['name' => 'description', 'value' => $task->description])
                                    @include('fields.input', ['name' => 'short_description', 'value' => $task->short_description])
                                    <x-common.common-statuses-select :selected="$task->status" />
                                    @include('fields.number', ['name' => 'points', 'value' => $task->points])
                                    @include('buttons.submit')
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="pt-4">
                                    @include('admin.ptasks.components.' . $task->type, ['data' => $data])
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
