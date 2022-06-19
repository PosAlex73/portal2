<div class="mb-3">
    <label for="categories" class="form-label">{{ !empty($label) ? $label : __('vars.courses') }}</label>
    <select class="default-select form-control wide" name="category_id" id="categories">
        @foreach($courses as $course)
            <option @if(!empty($selected) && $selected === $course->id) selected @endif value="{{ $course->id }}" >{{ $course->title }}</option>
        @endforeach
    </select>
</div>
