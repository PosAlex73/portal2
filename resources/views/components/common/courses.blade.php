<div class="mb-3">
    <label for="categories" class="form-label">{{ !empty($label) ? $label : __('vars.courses') }}</label>
    <select class="default-select form-control wide" name="course_id" id="courses">
        @foreach($courses as $course)
            <option @if(!empty($selected) && $selected === $course->id) selected @endif value="{{ $course->id }}" >{{ $course->title }}</option>
        @endforeach
    </select>
    <div class="mb-3">
        <div class="fade" id="test_task"></div>
        <div class="fade" id="practice_task"></div>
    </div>

</div>

<script>
    const test_task_container = document.getElementById('test_task')
    const practice_task_container = document.getElementById('practice_task')
    const type_task_selector = document.getElementById('courses')

    type_task_selector.addEventListener('change', (event) => {
        console.log(event.target)
    })
</script>
