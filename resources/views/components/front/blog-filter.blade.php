@foreach($filters as $filter)
    <div>
        @foreach($filter as $category)
            <p>{{ $category->shift() }}</p>
        @endforeach
    </div>
    <hr>
@endforeach
