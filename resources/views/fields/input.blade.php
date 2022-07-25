<div class="mb-3">
    <input
        type="text"
        class="form-control input-default "
        placeholder="{{ __('vars.label_' . $name) }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{!! $value ?? '' !!}"
    >
</div>
