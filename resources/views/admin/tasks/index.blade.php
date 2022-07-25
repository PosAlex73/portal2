
    @extends('layouts.admin')
    @section('content')
        <div class="card">
            <div class="card-header d-sm-flex d-block">
                <div class="me-auto mb-sm-0 mb-3">
                    <h4 class="card-title mb-2">{{ __('vars.plans') }}</h4>
                </div>
                <a href="{{ route('tasks.create') }}" class="btn btn-info">+ {{ __('vars.add_new_task') }}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                        <tr>
                            <th style="width:80px;"><strong>#</strong></th>
                            <th><strong>{{ __('vars.title') }}</strong></th>
                            <th><strong>{{ __('vars.status') }}</strong></th>
                            <th><strong>{{ __('vars.type') }}</strong></th>
                            <th><strong>{{ __('vars.course') }}</strong></th>
                            <th><strong>{{ __('vars.created') }}</strong></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td><strong>{{ $task->id }}</strong></td>
                                <td>{{ $task->title }}</td>
                                <td>@include('components.common.common-statuses', ['status' => $task->status])</td>
                                <td>{{ __('vars.task_type_' . $task->type) }}</td>
                                <td><a href="{{ route('courses.edit', ['course' => $task->course]) }}">{{ $task->course->title }}</a></td>
                                <td>{{ $task->created_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('tasks.edit', ['task' => $task]) }}">{{ __('vars.edit') }}</a>
                                            <a class="dropdown-item" href="{{ route('tasks.destroy', ['task' => $task]) }}">{{ __('vars.delete') }}</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection


