<!DOCTYPE html>
<html lang="en">
@include('components.front.meta')
<body>
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<div id="main-wrapper">
    @include('components.front.header')
    <x-menus.front-tar />
    <div class="content-body">
        <div class="container-fluid">
            <x-bread-crumbs />
            @include('flash.errors')
            @yield('content')
        </div>
    </div>
    @include('components.front.scripts')
</div>
</body>
</html>

