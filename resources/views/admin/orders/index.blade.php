@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-sm-flex d-block">
            <div class="me-auto mb-sm-0 mb-3">
                <h4 class="card-title mb-2">{{ __('vars.orders') }}</h4>
            </div>
            <a href="{{ route('orders.create') }}" class="btn btn-info">+ {{ __('vars.add_new_order') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <x-common.pagination route="orders.index" :items="$orders" />
                <table class="table table-responsive-md">
                    <thead>
                    <tr>
                        <th style="width:80px;"><strong>#</strong></th>
                        <th><strong>{{ __('vars.user') }}</strong></th>
                        <th><strong>{{ __('vars.payment') }}</strong></th>
                        <th><strong>{{ __('vars.total') }}</strong></th>
                        <th><strong>{{ __('vars.status') }}</strong></th>
                        <th><strong>{{ __('vars.created') }}</strong></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td><strong>{{ $order->id }}</strong></td>
                            <td>{{ $order->user->full_name }}</td>
                            <td>{{ __('vars.payments_' . $order->payment::NAME) }}</td>
                            <td><x-common.currency :value="$order->total" /></td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('orders.edit', ['order' => $order]) }}">{{ __('vars.edit') }}</a>
                                        <a class="dropdown-item" href="{{ route('orders.destroy', ['order' => $order]) }}">{{ __('vars.delete') }}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <x-common.pagination route="orders.index" :items="$orders" />
            </div>
        </div>
    </div>
@endsection
