@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.new_order') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('orders.store') }}" method="post">
                    @csrf

                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
