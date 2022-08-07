@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_task') }}</h4>
            @if($task->course)
                <a class="btn btn-primary" href="{{ route('courses.edit', ['course' => $task->course]) }}">{{ __('vars.view_course') }}</a>
            @endif
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('tasks.update', ['task' => $task]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $task->title])
                    @include('fields.rich_text', ['name' => 'description', 'value' => $task->description])
                    @include('fields.input', ['name' => 'short_description', 'value' => $task->short_description])
                    <x-common.common-statuses-select :selected="$task->status" />
                    @include('fields.number', ['name' => 'points', 'value' => $task->points])
                    @include('fields.image', ['name' => 'image'])
                    @include('fields.select', ['name' => 'type', 'variants' => $task_types, 'selected' => $task->type])
                    <x-common.courses />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
