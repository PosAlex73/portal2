@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-header">{{ $promotion->title }}</div>
        <div class="card-body"> {{ $promotion->description }}</div>
    </div>
@endsection
