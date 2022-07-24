@extends('layouts.front')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body chat-wrapper p-0">
                    <div class="chart-right-sidebar">
                        <div class="message-bx chat-box">
                            <div class="d-flex justify-content-between chat-box-header">
                                <div class="d-flex align-items-center">
                                    <img src="/static/images/users/pic2.jpg" alt="" class="rounded-circle main-img me-3">
                                    <h5 class="text-black font-w500 mb-sm-1 mb-0 title-nm">Baby Joies</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="d-sm-inline-block d-none">Last seen 4:23 AM</span>
                                    <div class="dropdown ms-2">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box-area dz-scroll ps" id="chartBox" style="background-image:url('images/chat-bg.png');">
                                <div>
                                    @foreach($thread->messages as $message)
                                        @if($message->owner_id === $user->id)
                                            @include('front.chat.components.user', ['message' => $message])
                                        @else
                                            @include('front.chat.components.admin', ['message' => $message])
                                        @endif
                                    @endforeach
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                            <form action="{{ route('front.send_message') }}" method="post">
                                @csrf
                                <div class="card-footer border-0 type-massage">
                                    <div class="input-group">
                                        <input class="form-control" name="message" placeholder="{{ __('vars.type_message') }}">
                                        <div class="input-group-append">
                                            <button type="submit" class="send-btn btn-primary btn">{{ __('vars.send') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
