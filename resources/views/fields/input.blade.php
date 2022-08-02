<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ __('vars.' . $name) }}</label>
    <input
        type="text"
        class="form-control input-default "
        placeholder="{{ __('vars.label_' . $name) }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{!! $value ?? '' !!}"
    >
</div>
