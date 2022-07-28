<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ __('vars.' . $name) ?? '' }}</label>
    <input
        type="number"
        class="form-control"
        id="{{ $name }}"
        autocomplete="off"
        placeholder="{{ __('vars.label_' . $name) }}"
        name="{{ __('vars.' . $name) }}"
        value="{{ $value  ?? ''}}"
    >
</div>
