@extends('layouts.front')
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{ $user->full_name }}</h4>
                                <p>{{ __('vars.student') }}</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{ __( $user->profile->contacted_email ?? __('vars.email_no_provided')) }}</h4>
                                <p>{{ __('vars.email') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-news">
                                <h5 class="text-primary d-inline">{{ __('vars.last_news') }}</h5>
                                @forelse($news as $new)
                                    <div class="media pt-3 pb-3">
                                        <img src="" alt="image" class="me-3 rounded" width="75">
                                        <div class="media-body">
                                            <h5 class="m-b-5"><a href="{{ route('front.news.show', ['new' => $new]) }}" class="text-black">{{ $new->title }}</a></h5>
                                            <p class="mb-0">{{ $new->short_description }}</p>
                                        </div>
                                    </div>
                                @empty
                                    <p>{{ __('vars.no_news_found') }}</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    @include('front.profile.components.profile_tabs')
                </div>
            </div>
        </div>
    </div>
@endsection
