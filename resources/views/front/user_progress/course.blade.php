@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $course->title }}</h3>
        </div>
        <div class="card-body">
            <a class="d-block" href="{{ route('front.courses.course', ['course' => $course]) }}">{{ __('vars.view_course') }}</a>
                <!--TODO add progress bar or some like thing-->
                <div class="project-nav">
                    <div class="card-action card-tabs  me-auto">
                        <ul class="nav nav-tabs style-2">
                            <li class="nav-item">
                                <a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">All Projects <span class="badge badge-pill shadow-primary badge-primary">154</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">On Progress <span class="badge badge-pill badge-info shadow-info">2</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Pending <span class="badge badge-pill badge-warning shadow-warning">4</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#navpills-4" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Closed <span class="badge badge-pill badge-danger shadow-danger">1</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <!--TODO tasks tabs-->
                <div class="tab-content project-list-group" id="myTabContent">
                    @foreach($tasks as $task)
                        <div class="tab-pane fade active show" id="navpills-1">
                            <div class="card">
                                <div class="project-info">
                                    <div class="col-xl-3 my-2 col-lg-4 col-sm-6">
                                        <h5 class="title font-w600 mb-2"><a href="{{ route('front.task', ['task' => $task]) }}" class="text-black">{{ $task->title }}</a></h5>
                                        <div class="text-dark"><i class="far me-3" aria-hidden="true"></i>{{ $task->short_description }}</div>
                                    </div>
                                    <div class="col-xl-3 my-2 col-lg-6 col-sm-6">
                                        <div class="d-flex align-items-center">
                                            <div class="power-ic">
                                                <i class="fa fa-bolt" aria-hidden="true"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span>Deadline</span>
                                                <h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 my-2 col-lg-6 col-sm-6">
                                        <div class="d-flex project-status align-items-center">
                                            <span class="btn bgl-warning text-warning status-btn me-3">{{ $user_progress['data'][$task->id]['status'] ?? '' }}</span>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="{{ route('front.task', ['task' => $task]) }}">{{ __('vars.do_task') }}</a>
                                                    <a class="dropdown-item" href="{{ route('front.report_task_mistake', ['task' => $task]) }}">{{ __('vars.report_mistake') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection
