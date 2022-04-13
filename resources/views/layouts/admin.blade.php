<!DOCTYPE html>
<html lang="en">
@include('components.admin.meta')
<body>
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<div id="main-wrapper">
    @include('components.admin.header')
    <x-menus.admin-sidebar />
    <div class="content-body">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    @include('components.admin.footer')
    @include('components.admin.scripts')
</div>
</body>
</html>

