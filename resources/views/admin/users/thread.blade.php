@extends('layouts.admin')
@section('content')
    <x-admin.user-tabs :user="$user" />
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
                            <form action="{{ route('send_message', ['thread' => $thread]) }}" method="post">
                                @csrf
                                <div class="card-footer border-0 type-massage">
                                    <div class="input-group">
                                        <input type="hidden" name="user" value="{{ $user->id }}">
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
