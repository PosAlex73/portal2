@forelse($course->tasks as $task)
    <div class="card">
        <div class="card-header">{{ $task->title }}</div>
        <div class="card-body">
            <p class="card-text">{{ $task->description }}</p>
        </div>
    </div>
@empty
    <p>{{ __('vars.no_tasks') }}</p>
@endforelse
