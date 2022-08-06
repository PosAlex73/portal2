@if(!$user_has_course)
<div class="card">
    <div class="card-body bg-danger text-light">{{ __('vars.you_need_to_bay_course') }}</div>
</div>
@endif
@forelse($course->tasks as $task)
    <div class="card">
        <div class="card-header">
            @if($user_has_course)
                <h5 class="title font-w600 mb-2">
                    <a href="{{ route('front.practice_task', ['task' => $task]) }}" class="text-black">{{ $task->title }}</a>
                </h5>
            @else
                <h5 class="title font-w600 mb-2">{{ $task->title }}</h5>
            @endif
        </div>
    </div>
@empty
    <p>{{ __('vars.no_tasks') }}</p>
@endforelse
