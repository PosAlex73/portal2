@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_promotion') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('promotions.update', ['promotion' => $promotion]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $promotion->title])
                    @include('fields.textarea', ['name' => 'description', 'value' =>  $promotion->description])
                    <x-common.common-statuses-select :selected="$promotion->status" />
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
