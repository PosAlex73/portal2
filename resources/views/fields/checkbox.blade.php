<div class="mb-3">
    <div class="form-check custom-checkbox mb-3">
        <input type="hidden" name="{{ $name }}" id="{{ $name }}" @if($value === 'A') value="N" @else value="Y" @endif>
        <input type="checkbox"
           class="form-check-input"
           name="{{ $name }}"
           id="{{ $name }}"
           @if($value === 'A') checked @endif
           value="A"
        >
        <label class="form-check-label" for="{{ $name }}">
            {{ __('vars.label.' . $name) }}
        </label>
    </div>
</div>
