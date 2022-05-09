@if($status === \App\Enums\CommonStatuses::ACTIVE)
    @include('components.statuses.success', ['status' => __('vars.common_status_' . $status)])
@else($status === \App\Enums\CommonStatuses::DISABLED)
    @include('components.statuses.danger', ['status' => __('vars.common_status_' . $status)])
@endif
