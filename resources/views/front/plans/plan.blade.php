@extends('layouts.front')
@section('content')
    <div class="card-body">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                    <img class="img-fluid" src="{{ $plan->image }}" alt="">
                </div>
                <div class="col-xl-9 col-lg-6 col-md-6 col-xxl-7 col-sm-12">
                    <div class="product-detail-content">
                        <div class="new-arrival-content pr">
                            <h4>{{ $plan->title }}</h4>
                            <div class="d-table mb-2">
                                <x-common.currency :value="$plan->price" />
                            </div>
                            <p class="card-text">{{ $plan->description }}</p>

                            @auth
                                <div class="shopping-cart mb-2 me-3">
                                    <form action="{{ route('front.order', ['id' => $plan->id, 'type' => 'plan']) }}" method="get">
                                        @include('fields.hidden', ['name' => 'id', 'value' => $plan->id])
                                        @include('fields.hidden', ['name' => 'type', 'value' => 'P'])
                                        @include('buttons.submit', ['text' => __('vars.buy_plan')])
                                    </form>
                                </div>
                            @else
                                @include('buttons.auth')
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
