<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ __('vars.' . $name) ?? '' }}</label>
    <textarea
        class="form-control"
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $row ?? 50 }}"
        cols="{{ $cols ?? 50 }}"
    >{{ $value ?? '' }}</textarea>
</div>
