@if(!empty($file))
    <p class="card-text"><a href="{{ route('download', ['path' => $path, 'file' => $file]) }}">{{ __('vars.download.' . $name) }}</a></p>
@endif
<div class="mb-3">
    <div class="form-file">
        <label class="form-label" for="{{ $name }}">{{ __('vars.label.' . $name) }}</label>
        <input type="file" class="form-file-input form-control" name="{{ $name }}" id="{{ $name }}">
    </div>
</div>
