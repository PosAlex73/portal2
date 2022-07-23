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
                                <div data-chat="person1" class="chat">
                                    <div class="media mb-4 received-msg justify-content-start align-items-start">
                                        <div class="image-bx me-sm-3 me-2">
                                            <img src="/static/images/users/pic5.jpg" alt="" class="rounded-circle img-1">
                                        </div>
                                        <div class="message-received">
                                            <p class="mb-1">
                                                Sed ut perspiciatis unde omnis iste natus error
                                            </p>
                                            <span class="fs-12 text -black">4.30 AM</span>
                                        </div>
                                    </div>
                                    <div class="media mb-4 justify-content-end align-items-end">
                                        <div class="message-sent">
                                            <p class="mb-1">
                                                Neque porro quisquam est, qui dolorem ipsum quia
                                            </p>
                                            <span class="fs-12 text-black">9.30 AM</span>
                                        </div>
                                        <div class="image-bx ms-sm-3 ms-2 mb-4">
                                            <img src="/static/images/profile/pic1.jpg" alt="" class="rounded-circle img-1">
                                        </div>
                                    </div>
                                    <div class="media mb-4  justify-content-end align-items-end">
                                        <div class="message-sent">
                                            <p class="mb-1">
                                                eum iure reprehenderit qui in ea
                                            </p>
                                            <span class="fs-12 text-black">9.30 AM</span>
                                        </div>
                                        <div class="image-bx ms-sm-3 ms-2 mb-4">
                                            <img src="/static/images/profile/pic1.jpg" alt="" class="rounded-circle img-1">
                                        </div>
                                    </div>
                                    <div class="media received-msg justify-content-start align-items-start">
                                        <div class="image-bx me-sm-3 me-2">
                                            <img src="/static/images/users/pic5.jpg" alt="" class="rounded-circle img-1">
                                        </div>
                                        <div class="message-received">
                                            <p class="mb-1">
                                                Hey, check my design update last night.
                                            </p>
                                            <span class="fs-12 text-black">4.30 AM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                            <div class="card-footer border-0 type-massage">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Type message...">
                                    <div class="input-group-append">
                                        <button type="button" class="send-btn btn-primary btn">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
