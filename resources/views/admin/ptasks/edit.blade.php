@extends('layouts.admin')
@section('content')
{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            <h4 class="card-title">{{ __('vars.edit_practice_task') }}</h4>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="basic-form">--}}
{{--                <form action="{{ route('ptasks.update', ['ptask' => $task]) }}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('PUT')--}}
{{--                    <div class="default-tab">--}}
{{--                        <ul class="nav nav-tabs" role="tablist">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i> Home</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i> Profile</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane fade show active" id="home" role="tabpanel">--}}
{{--                                <div class="pt-4">--}}
{{--                                    @include('fields.input', ['name' => 'title', 'value' => $task->title])--}}
{{--                                    @include('fields.rich_text', ['name' => 'description', 'value' => $task->description])--}}
{{--                                    @include('fields.input', ['name' => 'short_description', 'value' => $task->short_description])--}}
{{--                                    <x-common.common-statuses-select :selected="$task->status" />--}}
{{--                                    @include('fields.number', ['name' => 'points', 'value' => $task->points])--}}
{{--                                    @include('fields.image', ['name' => 'image'])--}}
{{--                                    @include('buttons.submit')--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="profile">--}}
{{--                                <div class="pt-4">--}}
{{--                                    <h4>This is profile title</h4>--}}
{{--                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.--}}
{{--                                    </p>--}}
{{--                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
