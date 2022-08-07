<div>
    @if(count($data['tests']) > 0)
        @foreach($data['tests'] as $test)
            <dvi class="mb-2">
                <h4><a class="text-black" href="{{ route('questions.edit', ['question' => $test]) }}">{{ $test->title }}</a></h4></h4>
                <p>{!! $test->questions !!}</p>
                <p>{{ __('vars.right_answer') }} {{ $test->right_answer }}
            </dvi>
        @endforeach
    @else
        <p>{{ __('vars.no_variants') }}</p>
    @endif
</div>
