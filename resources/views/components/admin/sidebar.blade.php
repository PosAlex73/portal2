<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="images/Untitled-1.jpg" alt="">
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span> Marquez</h5>
            <p class="email">marquezzzz@mail.com</p>
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
