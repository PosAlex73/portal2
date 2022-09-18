@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-sm-flex d-block">
            <div class="me-auto mb-sm-0 mb-3">
                <h4 class="card-title mb-2">{{ __('vars.articles') }}</h4>
            </div>
            <a href="{{ route('pages.create') }}" class="btn btn-info">+ {{ __('vars.add_page') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <x-common.pagination route="pages.index" :items="$pages" />
                <table class="table table-responsive-md">
                    <thead>
                    <tr>
                        <th style="width:80px;"><strong>#</strong></th>
                        <th><strong>{{ __('vars.title') }}</strong></th>
                        <th><strong>{{ __('vars.category') }}</strong></th>
                        <th><strong>{{ __('vars.status') }}</strong></th>
                        <th><strong>{{ __('vars.url') }}</strong></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td><strong>{{ $page->id }}</strong></td>
                            <td>{{ $page->title }}</td>
                            <td><a href="{{ route('categories.edit', ['category' => $page->category]) }}">{{ $page->category->title }}</a></td>
                            <td>
                                <x-common.common-statuses-view :status="$page->status" />
                            </td>
                            <td><a href="{{ $page->url }}">{{ __('vars.show_page') }}</a></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('pages.edit', ['page' => $page]) }}">{{ __('vars.edit') }}</a>
                                        <a class="dropdown-item" href="{{ route('pages.destroy', ['page' => $page]) }}">{{ __('vars.delete') }}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <x-common.pagination route="pages.index" :items="$pages" />
            </div>
        </div>
    </div>
@endsection
