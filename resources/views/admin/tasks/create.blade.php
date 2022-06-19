@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('vars.create_new_task') }}</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('tasks.store') }}" method="post">
                    @csrf
                    @include('fields.input', ['name' => 'title'])
                    @include('fields.rich_text', ['name' => 'description'])

                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
