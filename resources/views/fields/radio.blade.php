<div class="mb-3">
    <p>{{ __('vars.label.' . $name) }}</p>
    @foreach($variants as $variant)
        <div class="form-check mb-2">
            <input type="radio" class="form-check-input" name="{{ $name }}" value="{{ $variant }}" id="{{ $variant }}">
            <label class="form-check-label" for="{{ $variant }}">
                {{ __('vars.label.' . $variant }}
            </label>
        </div>
    @endforeach
</div>
