<div class="mb-3">
    <label for="status" class="form-label">{{ __('vars.status') }}</label>
    <select class="default-select form-control wide" name="status" id="status">
        @foreach($statuses as $status)
            <option @if(!empty($selected) && $selected === $status) selected @endif value="{{ $status }}" >{{ __('vars.common_status_' . $status) }}</option>
        @endforeach
    </select>
</div>
