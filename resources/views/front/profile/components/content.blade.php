<div class="tab-content">
    <div id="profile-settings" class="tab-pane fade">
        <div class="my-post-content pt-3">
            @forelse($courses as $course)
                <p>{{ $course->title }}</p>
            @empty
                <p class="card-text">{{ __('vars.no_courses') }}</p>
            @endforelse
        </div>
    </div>
    <div id="about-me" class="tab-pane fade active show">
        <div class="profile-about-me">
            <div class="pt-4 border-bottom-1 pb-3">
                @if($profile->about)
                    <h4 class="text-primary">{{ __('vars.about_me') }}</h4>
                    <p class="mb-2">{{ $profile->about }}</p>
                @else
                    <p>{{ __('vars.no_about') }}</p>
                @endif
            </div>
        </div>
        <div class="profile-personal-info">
            <h4 class="text-primary mb-4">{{ __('vars.personal_info') }}</h4>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">{{ __('vars.name') }} <span class="pull-end">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ $user->full_name }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">{{ __('vars.phone') }} <span class="pull-end">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ $profile->phone }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">{{ __('vars.email') }} <span class="pull-end">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ $profile->contacted_email }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">{{ __('vars.age') }} <span class="pull-end">:</span></h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ $profile->age }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">{{ __('vars.country') }} <span class="pull-end">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ $profile->country }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">{{ __('vars.experience') }} <span class="pull-end">:</span></h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ $profile->experience }}</span>
                </div>
            </div>
        </div>
    </div>
    <div id="my-posts" class="tab-pane fade">
        <div class="pt-3">
            <form action="{{ route('front.user.settings') }}" method="post">
                @csrf
                @foreach($settings as $setting => $value)
                    @include('fields.hidden', ['value' => 'D', 'name' => $setting])
                    @include('fields.checkbox', ['value' => $value, 'name' => $setting])
                @endforeach
                @include('buttons.submit')
            </form>
        </div>
    </div>
</div>
