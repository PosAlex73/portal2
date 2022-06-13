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
                <a class="has-arrow ai-icon text-light" href="{{ $item->route }}" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">{{ $item->name }}</span>
                </a>
            @endforeach
        </ul>
    </div>
</div>
