@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-black">{{ $task->title }}</h3>
        </div>
        <div class="card-body">
            <p class="text-black">{{ $task->description }}</p>
            @include('front.user_progress.task_template.' . $task->type)
        </div>
    </div>
@endsection
