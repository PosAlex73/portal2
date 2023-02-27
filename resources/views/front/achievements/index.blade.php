@extends('layouts.front')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($achievements as $achieve)
                @php
                    $info = $achieve->getInfo();
                @endphp
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-bottom img-fluid" src="{{ $info->getImage() }}" alt="Card image cap">
                        <div class="card-header">
                            <h5 class="card-title">{{ $info->getTitle() }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $info->getDescription() }}</p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
