@if(!empty($file))
    <img src="{{ asset('storage/' . $file . '/' . $id) }}" alt="">
@endif
<div class="mb-3">
    <label class="form-label" for="{{ $name }}">{{ __('vars.label.' . $name) }}</label>
    <input class="form-control" type="file" name="{{ $name }}" id="{{ $name }}">
</div>
