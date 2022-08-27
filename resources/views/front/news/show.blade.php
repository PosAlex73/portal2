@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-black">{{ $new->title }}</h3>
        </div>
        <div class="card-body">
            <p class="text-black">{!! $new->description !!}</p>
        </div>
    </div>
@endsection
