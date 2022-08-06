@extends('layouts.admin')
@section('content')
    <div class="row">
        @foreach($analytics as $key => $value)
            <div class="col-xl-3 col-sm-6 m-t35">
                <div class="card card-coin">
                    <div class="card-body text-center">
                        <h2 class="text-black mb-2 font-w600"><a class="text-black" href="{{ $value->getListLink() }}">{{ $value->getTitle() }}</a></h2>
                        <p class="mb-0 fs-14">
                            <span class="text-success me-1">{{ $value->getCountInfo() }}</span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
