@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.course') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('plans.update', ['plan' => $plan]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $plan->title])
                    @include('fields.textarea', ['name' => 'description', 'value' => $plan->description])
                    @include('fields.input', ['name' => 'short_description', 'value' => $plan->short_description])
                    <x-common.common-statuses-select :selected="$plan->status" />
                    @include('fields.number', ['name' => 'price', 'value' => $plan->price])
                    @include('fields.image', ['name' => 'image'])
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
