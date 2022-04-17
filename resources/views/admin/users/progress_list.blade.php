@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <x-admin.user-tabs :user="$user" />
        <div class="card-body">
            <div class="basic-form">
                @if($progress->count() > 0)
                <table class="table table-responsive-md">
                    <thead>
                    <tr>
                        <th style="width:80px;"><strong>#</strong></th>
                        <th class="text-center"><strong>{{ __('vars.title') }}</strong></th>
                        <th class="text-center"><strong>{{ __('vars.order_id') }}</strong></th>
                        <th class="text-center"><strong>{{ __('created') }}</strong></th>
                        <th class="text-center"><strong>{{ __('updated') }}</strong></th>
                        <th class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($progress as $course)
                        <tr>
                            <td class="text-center"><strong>{{ $course->id }}</strong></td>
                            <td class="text-center"><a href="{{ route('courses.edit', ['course' => $course->course->id]) }}">{{ $course->course->title }}</a></td>
                            <td class="text-center"><a href="{{ route('orders.edit', ['order' => $course->order->id]) }}">{{ $course->order->id }}</a></td>
                            <td class="text-center">{{ $course->created_at }}</td>
                            <td class="text-center"><span class="">{{ $course->updated_at }}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <p>{{ __('var.no_progress_found') }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
