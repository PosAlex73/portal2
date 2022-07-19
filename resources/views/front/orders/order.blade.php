@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 order-lg-2 mb-4">
                    @include('front.orders.product', ['product' => $order_data['product']])
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="input-group-text">Redeem</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8 order-lg-1">
                    <h4 class="mb-3">{{ __('vars.user_data') }}</h4>
                    <hr>
                    <form class="needs-validation" novalidate="" action="{{ route('front.create_order') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" value="{{ $order_data['product']->type }}">
                        <input type="hidden" name="id" value="{{ $order_data['product']->id }}">
                        @include('front.orders.customer_info')
                        <!--TODO payment component-->
                        @if(count($order_data['payments']) > 0 )
                            <h4 class="mb-3">{{ __('vars.payment') }}</h4>
                                @foreach($order_data['payments'] as $payment)
                                    @include($payment->getTemplate(), ['payment' => $payment])
                                @endforeach
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('vars.checkout') }}</button>
                        @else
                            <p>{{ __('vars.no_payments_available') }}</p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
