<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ __('vars.label.' . $name) }}</label>
    <select multiple class="form-select" name="{{ $name }}" id="{{ $name }}">
        @foreach($variants as $key => $variant)
            <option @if(!empty($seleced) && in_array($variant, $selected)) selected @endif>{{ __('vars.' .$variant }}</option>
        @endforeach
    </select>
</div>
