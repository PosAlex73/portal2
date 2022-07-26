@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.edit_category') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('categories.update', ['category' => $category]) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('fields.input', ['name' => 'title', 'value' => $category->title])
                    <x-common.common-statuses-select :selected="$category->status"/>
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
