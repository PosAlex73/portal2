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
{{--                FIXME доделалать ссылки--}}
                <li class=""><a class="has-arrow ai-icon" href="{{ $item->route }}" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">{{ $item->name }}</span>
                    </a>
                    <ul aria-expanded="false" class="mm-collapse">
                        <li class="mm-active"><a href="index.html" class="mm-active">Dashboard Light</a></li>
                        <li><a href="index-2.html">Dashboard Dark</a></li>
                        <li><a href="my-wallets.html">Wallet</a></li>
                        <li><a href="tranasactions.html">Transactions</a></li>
                        <li><a href="coin-details.html">Coin Details</a></li>
                        <li><a href="portofolio.html">Portofolio</a></li>
                        <li><a href="market-capital.html">Market Capital</a></li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>
