<div class="tab-content">
    <div id="profile-settings" class="tab-pane fade active show">
        <div class="my-post-content pt-3">
            @forelse($progress as $user_course)
                @include('front.profile.components.courses_list', ['user_progress' => $user_course])
            @empty
                <p class="card-text">{{ __('vars.no_courses') }}</p>
                @include('buttons.link', ['route' => route('front.courses'), 'text' => __('vars.view_courses')])
            @endforelse
        </div>
    </div>
    <div id="about-me" class="tab-pane fade">
        <div class="profile-personal-info">
            <form action="{{ route('front.profile.update', ['profile' => $profile]) }}" method="post">
                @csrf
                <div class="mb-2"></div>
                @include('fields.input', ['name' => 'first_name', 'value' => $user->first_name])
                @include('fields.input', ['name' => 'last_name', 'value' => $user->last_name])
                @include('fields.input', ['name' => 'phone', 'value' => $profile->phone])
                @include('fields.email', ['name' => 'contacted_email', 'value' => $profile->contacted_email])
                @include('fields.number', ['name' => 'age', 'value' => $profile->age])
                @include('fields.number', ['name' => 'experience', 'value' => $profile->experience])
                @include('fields.textarea', ['name' => 'about', 'value' => $profile->about])

                @include('buttons.submit')
            </form>
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
    <div id="my-achievements" class="tab-pane fade">
        <div class="card">
            <div class="card-body">
                <div class="profile-interest">
                    <h5 class="text-primary d-inline">{{ __('vars.achivements') }}</h5>
                    <div class="row mt-4 sp4" id="lightgallery">
                        <div class="row">
                            @forelse($achievements as $achieve)
                                    <div class="col-4">
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="{{ $achieve->image }}" alt="Card image cap">
                                            <div class="card-title">{{$achieve->title}}</div>
                                            <div class="card-body">
                                                <p class="card-text">{{ $achieve->description }}</p>
                                                <p class="card-text">{{ __('vars.get_at') . ': ' . $achieve->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                            @empty
                        </div>
                        <p>{{ __('vars.you_still_not_have_achieves') }}</p>
                        @endforelse
                            <a class="btn btn-secondary btn-sm" href="{{ route('front.achievements.list') }}">{{ __('vars.show_all_achievements') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
