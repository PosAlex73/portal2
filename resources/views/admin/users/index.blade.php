@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-sm-flex d-block">
            <div class="me-auto mb-sm-0 mb-3">
                <h4 class="card-title mb-2">{{ __('vars.user_list') }}</h4>
            </div>
            <a href="{{ route('users.import') }}" class="btn btn-info light me-3"><i class="las la-download scale3 me-2"></i>{{ __('vars.import_users') }}</a>
            <a href="{{ route('users.create') }}" class="btn btn-info">+ {{ __('vars.add_user') }}</a>
        </div>
        <div class="card-body">
            @if($users->count() > 0)
            <div class="table-responsive">
                <x-common.pagination route="users.index" :items="$users" />
                <table class="table style-1" id="ListDatatableView">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('vars.customer') }}</th>
                        <th>{{ __('vars.phone') }}</th>
                        <th>{{ __('vars.created') }}</th>
                        <th>{{ __('vars.status') }}</th>
                        <th>{{ __('vars.created') }}</th>
                        <th>{{ __('vars.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <h6>{{ $user->id }}</h6>
                        </td>
                        <td>
                            <div class="media style-1">
                                <img src="images/avatar/1.jpg" class="img-fluid me-2" alt="">
                                <div class="media-body">
                                    <h6>{{ $user->full_name }}</h6>
                                    <span>{{ $user->email }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h6>{{ $user->profile->phone }}</h6>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h6 class="text-primary">{{ $user->created_at }}</h6>
                            </div>
                        </td>
                        <td>
                            @include('admin.users.user_statuses', ['status' => $user->status])
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <div class="d-flex action-button">
                                <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-info btn-xs light px-2">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('users.destroy', ['user' => $user]) }}" class="ms-2 btn btn-xs px-2 light btn-danger">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                <x-common.pagination route="users.index" :items="$users" />
            </div>
            @else
                <p>{{ __('vars.no_users_found') }}</p>
            @endif
        </div>
    </div>
@endsection
