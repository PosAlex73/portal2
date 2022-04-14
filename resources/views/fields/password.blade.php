<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $name ?? '' }}</label>
    <input
        type="password"
        class="form-control"
        id="{{ $name }}"
        autocomplete="off"
        placeholder="{{ __('vars.label_' . $name) }}"
        name="{{ $name }}"
        value="{{ $value  ?? ''}}"
    >
</div>
