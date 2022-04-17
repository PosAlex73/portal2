<div class="mb-3">
    <label for="categories" class="form-label">{{ !empty($label) ? $label : __('vars.categories') }}</label>
    <select class="default-select form-control wide" name="category_id" id="categories">
        @foreach($categories as $category)
            <option @if(!empty($selected) && $selected === $category->id) selected @endif value="{{ $category->id }}" >{{ $category->title }}</option>
        @endforeach
    </select>
</div>
