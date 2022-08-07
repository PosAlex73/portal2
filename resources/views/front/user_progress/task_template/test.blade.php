@php
    $questions = $task->questions;
@endphp

<div>
    @if($questions->count() > 0)
        <p class="text-black">{{ __('vars.write_number_answer_to_field') }}</p>
        <form action="{{ route('front.ptask.check', ['task' => $task]) }}" method="post">
            @csrf
            @foreach($questions as $test)
                <p>{!! $test->questions !!}</p>
                @include('fields.test_asnwer', ['name' => 'result[' . $test->id . ']'])
            @endforeach
            <div class="input-info input-group">
                @include('buttons.submit')
            </div>
        </form>
    @else
        <p>{{ __('vars.no_variants') }}</p>
    @endif
</div>
