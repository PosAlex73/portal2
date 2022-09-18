@foreach($filters as $key => $filter)
    <div>
        <p class="text-center">{{ __('vars.' . $key) }}</p>
        @foreach($filter as $category)
            <a class="badge bg-primary m-2" href="{{ route('front.blog', ['category' => $category]) }}">{{ $category }}</a>
        @endforeach
    </div>
    <hr>
@endforeach
