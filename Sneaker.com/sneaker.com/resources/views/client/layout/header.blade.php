<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            @if(Auth::check())
                <div class="ht-left">
                    <div class="phone-service">
                        <i class=" fa fa-user"></i>
                        Hello {{Auth::user()->full_name}}
                    </div>
                </div>
            @else
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        Hello
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-home"></i>
                        Welcome to Sneaker.com
                    </div>
                </div>
            @endif
            <div class="ht-right">

                @if(Auth::check())
                    <div class="login-panel"><i class="fa fa-user"></i>
                        <a href="<?php echo url('logout')?>">Logout</a>
                    </div>
                @else
                    <div class="login-panel"><i class="fa fa-user"></i>
                        <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@mdo">Login
                        </button>
                    </div>
                    @include('client.login.modal')
                @endif

                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="<?php echo asset('public/client/img/flag-1.jpg');?>"
                                data-imagecss="flag yt"
                                data-title="English">English
                        </option>
                        <option value='yu' data-image="<?php echo asset('public/client/img/flag-2.jpg');?>"
                                data-imagecss="flag yu"
                                data-title="Bangladesh">German
                        </option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="<?php echo asset('public/client/img/logo1.png');?>" alt=""
                                 style="width: 165px; height: 29px">
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <form action="<?php echo url('search')?>" class="input-group" role="search" method="get" id="searchform" >
                            <input type="text" name="key" id="s" placeholder="What do you need?">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>


                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon"><a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
{{--                            <div class="heart-hover">--}}
{{--                                <div>--}}
{{--                                    @include('client.shopping_cart.heart')--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </li>
                        <li class="cart-icon"><a href="#">
                                <i class="icon_bag_alt"></i>
                                @if(Session::has("Cart") != null)
                                    <span id="total-quanty-show">{{Session::get('Cart')->totalQty}}</span>
                                @else
                                    <span id="total-quanty-show">0</span>
                                @endif
                            </a>
                            <div class="cart-hover">
                                <div id="change-item-cart">
                                    @include('client.shopping_cart.cart')
                                </div>
                                <div class="select-button">
                                    <a href="<?php echo url('shopping-cart')?>" class="primary-btn view-card">VIEW CART</a>
                                    @if(Auth::check())
                                        <a href="<?php echo url('check-out')?>" class="primary-btn checkout-btn">CHECK OUT</a>
                                    @else
                                        <a href="<?php echo url('check-out')?>" class="primary-btn checkout-btn" data-toggle="modal" data-target="#exampleModal">CHECK OUT</a>
                                        @include('client.login.modal')
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>All departments</span>
                    <ul class="depart-hover">
{{--                        @foreach($type_product as $tp)--}}
{{--                            <li><a href="#">{{$tp->name}}</a></li>--}}
{{--                        @endforeach--}}
                        <li><a href="#">Vans</a></li>
                        <li><a href="#">Converse</a></li>
                        <li><a href="#">Adidas</a></li>
                        <li><a href="#">Nike</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="<?php echo url('/')?>">Home</a></li>
                    <li><a href="<?php echo url('shop')?>">Shopping</a></li>
                    <li><a href="#">Collection</a>
                        <ul class="dropdown">
                            <li><a href="#">Vans</a></li>
                            <li><a href="#">Converse</a></li>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Nike</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url('/blog')?>">Blog</a></li>
                    <li><a href="<?php echo url('/contact')?>">Contact</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo url('/shopping-cart')?>">Shopping Cart</a></li>
                            <li><a href="<?php echo url('/check-out')?>">Checkout</a></li>
                            <li><a href="<?php echo url('/faqs')?>">Faq</a></li>
                            <li><a href="<?php echo url('/register')?>">Register</a></li>
                            @if(Auth::check())
                                <li><a href="<?php echo url('logout')?>">Logout</a></li>
                            @else
                                <li><a href="#" data-toggle="modal" data-target="#exampleModal">Login</a></li>
                                @include('client.login.modal')
                            @endif
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->
