@extends('layouts.admin')
@section('content')
    <div class="card">
    <div class="card-header">
        <h4 class="card-title">{{ __('vars.user_progress') }}</h4>
    </div>
    <div class="card-body">
        @if($progress->count() > 0)
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                <tr>
                    <th style="width:80px;"><strong>#</strong></th>
                    <th><strong>{{ __('vars.title') }}</strong></th>
                    <th><strong>{{ __('vars.user') }}</strong></th>
                    <th><strong>{{ __('vars.order') }}</strong></th>
                    <th><strong>{{ __('status') }}</strong></th>
                    <th><strong>{{ __('created') }}</strong></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($progress as $course)
                <tr>
                    {{-- FIXME add course tasks when develop course system --}}
                    <td><strong>{{ $course->id }}</strong></td>
                    <td><a href=""></a></td>
                    <td><a href="{{ route('users.edit', ['user' => $course->user]) }}">{{ $course->user->full_name }}</a></td>
                    <td><a href="{{ route('orders.edit', ['order' => $course->order]) }}">{{ __('vars.order') }}# {{ $course->order->id }}</a></td>
                    <td>{{ __('vars.course_statuses_' . $course->status) }}</td>
                    <td>{{ $course->created_at }}</td>
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
        </div>
        @else
            <p>{{ __('vars.no_progress_found') }}</p>
        @endif
    </div>
    </div>
@endsection
