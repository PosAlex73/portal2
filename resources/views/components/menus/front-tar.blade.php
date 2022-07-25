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
        <ul class="metismenu mm-show" id="menu">
            @foreach($menu as $item)
                <li>
                    <a class="@if($item->isDropdown) has-arrow @endif ai-icon text-light" href="{{ $item->route }}" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">{{ $item->name }}</span>
                    </a>
                    @if($item->isDropdown)
                        <ul aria-expanded="false" class="mm-collapse">
                            @foreach($item->items as $menu_name => $menu_route)
                                <li>
                                    <a href="{{ route($menu_route) }}">{{ $menu_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
