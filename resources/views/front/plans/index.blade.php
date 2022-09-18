@extends('layouts.front')
@section('content')
    <div class="row">
        <x-common.pagination route="front.plans" :items="$plans" />
        @forelse($plans as $plan)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <x-common.image :image="$plan->image" />
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="{{ route('front.plans.plan', ['plan' => $plan]) }}">
                                    {{ $plan->title }}
                                </a>
                            </h3>
                            <p class="card-text">{{ $plan->short_description }}</p>
                        </div>
                        <div class="card-footer">
                            <x-common.currency :value="$plan->price" />
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>{{ __('vars.no_plans_found') }}</p>
        @endforelse
        <x-common.pagination route="front.plans" :items="$plans" />
    </div>
@endsection
