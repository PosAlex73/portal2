@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-sm-flex d-block">
            <div class="me-auto mb-sm-0 mb-3">
                <h4 class="card-title mb-2">{{ __('vars.images') }}</h4>
            </div>
            <a href="{{ route('images.create') }}" class="btn btn-info">+ {{ __('vars.add_image') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <x-common.pagination route="images.index" :items="$images" />
                <table class="table table-responsive-md">
                    <thead>
                    <tr>
                        <th style="width:80px;"><strong>#</strong></th>
                        <th><strong>{{ __('vars.title') }}</strong></th>
                        <th><strong>{{ __('vars.image') }}</strong></th>
                        <th><strong>{{ __('vars.path') }}</strong></th>
                        <th><strong>{{ __('vars.status') }}</strong></th>
                        <th><strong>{{ __('vars.type') }}</strong></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td><strong>{{ $image->id }}</strong></td>
                            <td><strong>{{ $image->title }}</strong></td>
                            <td>
                                <a href="{{ route('images.edit', ['image' => $image]) }}">
                                    <x-common.image :image="$image->path" :w="100" :h="100" />
                                </a>
                            </td>
                            <td>
                                {{ \App\Facades\ImageHelper::getImagePath('c' . $image->path) }}
                            </td>
                            <td>
                                <x-common.common-statuses-view :status="$image->status" />
                            </td>
                            <td>
                                {{ $image->created_at }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('images.edit', ['image' => $image]) }}">{{ __('vars.edit') }}</a>
                                        <a class="dropdown-item" href="{{ route('images.destroy', ['image' => $image]) }}">{{ __('vars.delete') }}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <x-common.pagination route="images.index" :items="$images" />
            </div>
        </div>
    </div>
@endsection
