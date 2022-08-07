@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <x-common.pagination route="front.promotions" :items="$promotions" />
                @forelse($promotions as $promo)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="{{ route('front.promotion', ['promotion' => $promo->id]) }}">
                                            {{ $promo->title }}
                                        </a>
                                    </h3>
                                    <p class="card-text">{{ $promo->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>{{ __('vars.no_promo_found') }}</p>
                @endforelse
                <x-common.pagination route="front.promotions" :items="$promotions" />
            </div>
        </div>
    </div>
@endsection
