@if(!$user_has_course)
<div class="card">
    <div class="card-body bg-danger text-light">{{ __('vars.you_need_to_bay_course') }}</div>
</div>
@endif
@forelse($course->tasks as $task)
    <div class="card">
        <div class="card-header">
            @if($user_has_course)
                <a href="{{ route('front.task', ['task' => $task]) }}">{{ $task->title }}</a>
            @else
                <p>{{ $task->title }}</p>
            @endif
        </div>
        <div class="card-body">
            <p class="card-text">{!! $task->short_description !!}</p>
        </div>
    </div>
@empty
    <p>{{ __('vars.no_tasks') }}</p>
@endforelse
