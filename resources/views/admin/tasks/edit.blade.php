@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_task') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('tasks.store') }}" method="post">
                    @csrf
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
