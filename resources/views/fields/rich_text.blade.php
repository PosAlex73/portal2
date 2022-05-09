<span>{{ __('vars.' . $name) }}</span>
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-body custom-ekeditor">
                <textarea id="ckeditor" name="{{ $name }}">{{ $value }}</textarea>
            </div>

        </div>
    </div>
</div>


<script src="{{ asset('./vendor/ckeditor/ckeditor.js') }}"></script>
<!-- Summernote init -->
<script src="{{ asset('./js/custom.js') }}"></script>
<script src="{{ asset('./js/deznav-init.js') }}"></script>
