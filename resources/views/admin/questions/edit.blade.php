@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_test') }}</h4>
            <a class="btn btn-secondary" href="{{ route('ptasks.edit', ['ptask' => $question->practice_task_id]) }}">{{ __('vars.view_task') }}</a>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('questions.update', ['question' => $question]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $question->title])
                    @include('fields.rich_text', ['name' => 'questions', 'value' => $question->questions])
                    <x-common.common-statuses-select :selected="$question->status"/>
                    @include('fields.number', ['name' => 'right_answer', 'value' => $question->right_answer])
                    <select name="practice_task_id" id="practice_task" name="practice_task_id" class="default-select form-control wide mb-2">
                        @foreach($ptasks as $task)
                            <option value="{{ $task->id }}" @if($question->practice_task_id === $task->id) selected @endif>{{ $task->title }}</option>
                        @endforeach
                    </select>
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
