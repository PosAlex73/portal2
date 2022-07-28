<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ __('vars.label.' . $name) }}</label>
    <select class="default-select form-control wide" name="{{ $name }}" id="{{ $name }}">
        @foreach($variants as $key => $variant)
            <option @if(!empty($selected) && $selected === $key) selected @endif value="{{ $key }}" >{{ __('countries.' . $variant) }}</option>
        @endforeach
    </select>
</div>
