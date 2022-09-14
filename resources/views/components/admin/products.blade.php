<div class="mb-2">
    <label for="">{{ __('vars.select_product') }}</label>
    <select class="form-select" aria-label="Default select example" name="course">
        @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->title }}</option>
        @endforeach
    </select>
</div>
