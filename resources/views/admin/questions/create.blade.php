@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_test') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('questions.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.rich_text', ['name' => 'questions'])
                    <x-common.common-statuses-select />
                    @include('fields.number', ['name' => 'right_answer'])
                    <select name="practice_task_id" id="practice_task" name="practice_task_id" class="default-select form-control wide mb-2">
                        @foreach($ptasks as $task)
                            <option value="{{ $task->id }}">{{ $task->title }}</option>
                        @endforeach
                    </select>
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
