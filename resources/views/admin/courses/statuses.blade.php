@if($status === \App\Enums\Courses\CourseStatuses::ACTIVE)
    @include('components.statuses.success', ['status' => __('vars.course_statuses_' . $status)])
@elseif($status === \App\Enums\Courses\CourseStatuses::DISABLED)
    @include('components.statuses.danger', ['status' => __('vars.course_statuses_' . $status)])
@elseif($status === \App\Enums\Courses\CourseStatuses::IN_PROGRESS)
    @include('components.statuses.warning', ['status' => __('vars.course_statuses_' . $status)])
@elseif($status === \App\Enums\Courses\CourseStatuses::DELETED)
    @include('components.statuses.danger', ['status' => __('vars.course_statuses_' . $status)])
@else
    @include('components.statuses.info', ['status' => __('vars.course_statuses_' . $status)])
@endif
