<span>{{ __('vars.' . $name) }}</span>
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-body custom-ekeditor">
                <textarea id="ckeditor2" name="{{ $name }}">{{ $value ?? '' }}</textarea>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('./js/editor/ckeditor.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        CKEDITOR.replace('ckeditor2')
    });
</script>
