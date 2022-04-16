@if($status === \App\Enums\Users\UserStatuses::ACTIVE)
    @include('components.statuses.success', ['status' => __('vars.user_status_' . $status)])
@elseif($status === \App\Enums\Users\UserStatuses::DISABLED)
    @include('components.statuses.warning'. ['status' => __('vars.user_status_' . $status)])
@elseif($status === \App\Enums\Users\UserStatuses::BANNED)
    @include('components.statuses.danger', ['status' => __('vars.user_status_' . $status)])
@else
    @include('components.statuses.info', ['status' => __('vars.user_status_' . $status)])
@endif
