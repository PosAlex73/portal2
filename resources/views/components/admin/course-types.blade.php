<div class="mb-3">
    <label for="status" class="form-label">{{ __('vars.course_type') }}</label>
    <select class="default-select form-control wide" name="type" id="type">
        @foreach($types as $type)
            <option @if(!empty($selected) && $selected === $type) selected @endif value="{{ $type }}" >{{ __('vars.type_statuses_' . $type) }}</option>
        @endforeach
    </select>
</div>
