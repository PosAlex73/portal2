<div class="tab-content">
    <div id="profile-settings" class="tab-pane fade">
        <div class="my-post-content pt-3">
            @forelse($progress as $user_course)
                @include('front.profile.components.courses_list', ['user_progress' => $user_course])
            @empty
                <p class="card-text">{{ __('vars.no_courses') }}</p>
            @endforelse
        </div>
    </div>
    <div id="about-me" class="tab-pane fade active show">
        <div class="profile-personal-info">
            <form action="{{ route('front.user.update', ['user' => $user]) }}" method="post">
                @csrf
                <div class="mb-2"></div>
                @include('fields.input', ['name' => 'first_name', 'value' => $user->first_name])
                @include('fields.input', ['name' => 'last_name', 'value' => $user->last_name])
                @include('fields.input', ['name' => 'phone', 'value' => $profile->phone])
                @include('fields.email', ['name' => 'email', 'value' => $profile->contacted_email])
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
</div>
