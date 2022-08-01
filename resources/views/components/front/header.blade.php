<div class="nav-header">
    <a href="{{ route('front.index') }}" class="brand-logo">
        <x-common.logo />
    </a>
</div>

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="input-group search-area right d-lg-inline-flex d-none">
                        <form action="{{ route('front.search') }}" method="get" id="main-search">
                            <div class="input-group search-area right d-lg-inline-flex d-none">
                                <input type="text" class="form-control" name="search" value="{{ $search ?? '' }}" placeholder="{{ __('vars.search') }}">
                                <div class="input-group-append">
									<span class="input-group-text" id="search-button">
                                        <i class="flaticon-381-search-2"></i>
									</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <ul class="navbar-nav header-right main-notification">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-fullscreen" href="#">
                            <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                            <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                        </a>
                    </li>
                    <x-front.notifications />
                    <x-front.present />
                        <li class="nav-item dropdown header-profile">
                            @auth
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                <img src="images/profile/pic1.jpg" width="20" alt=""/>
                                <div class="header-info">
                                    <span>{{ Auth()->user()->full_name }}</span>
                                    <small>{{ Auth()->user()->first_name }}</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('front.user') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ms-2">{{ __('vars.profile') }}</span>
                                </a>
                                <a href="{{ route('front.messages') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <span class="ms-2">{{ __('vars.messages') }}  <x-front.messages /></span>
                                </a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button href="routes" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">{{ __('vars.logout') }}</span>
                                    </button>
                                </form>
                            </div>
                            @else
                                <div class="btn-group">
                                    <a href="{{ route('login') }}" class="btn btn-outline-primary">{{ __('vars.login') }}</a>
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary">{{ __('vars.register') }}</a>
                                </div>
                            @endauth
                        </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
