@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="default-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i>{{ __('vars.course') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i>{{ __('vars.tasks') }}</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="pt-4">
                            @include('front.pcourses.content')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="pt-4">
                            @include('front.pcourses.tasks')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


