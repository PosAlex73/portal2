@php
$user = Auth::user();

if (!empty($user->profile->image)) {
    $user_image = $user->profile->image;
} else {
    $user_image = 'images/no_image.jpg';
}

@endphp

<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="{{ asset($user_image) }}" alt="">
                <a href="{{ route('users.edit', ['user' => $user]) }}"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">{{ __('vars.hello') }},</span> {{ $user->first_name }}</h5>
            <p class="email">{{ $user->email }}</p>
        </div>
        <ul class="metismenu" id="menu">
            @foreach($sidebar as $item)
                @if($item instanceof \App\Menus\Admin\Components\Title)
                    @include('components.admin.menu_components.title', ['item' => $item])
                @elseif($item instanceof \App\Menus\Admin\Components\Group)
                    @include('components.admin.menu_components.group', ['item' => $item])
                @else
                    @include('components.admin.menu_components.link', ['item' => $item])
                @endif
            @endforeach
        </ul>
    </div>
</div>
