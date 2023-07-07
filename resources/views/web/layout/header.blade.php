<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{{ URL('web') }}"><img src="{{ Asset ('img/logo2.png') }}" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="{{ URL('web/fav_list') }}"><i class="fa fa-heart"></i></li>
            <li><a href="{{ URL('web/shop_cart') }}"><i class="fa fa-shopping-bag"></i></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{ Asset("img/language.png") }}" alt="" />
            <div>English</div>
            <span class="arrow_carrot-down"></span>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <div class=" col-lg-6">
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ URL("web") }}">Home</a></li>
                <li><a href="{{ URL("web/shop") }}">Shop</a></li>
                <li><a href="{{URL("web/product")}}">Product</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{URL("web/category")}}">Categories</a></li>
                        <li><a href="{{URL("web/shop_cart")}}"">Shoping Cart</a></li>
                        <li><a href=" {{URL("web/checkout")}}">Check Out</a></li>
                        <li><a href="{{URL("web/blog_details")}}">Blog Details</a></li>
                        <li><a href="{{URL("web/blog")}}">Blog</a></li>
                        <li><a href="{{URL("web/contact")}}">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="{{URL("https://www.facebook.com/profile.php?id=100063885946281")}}"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="{{URL("https://www.facebook.com/profile.php?id=100063885946281")}}"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                        </div>
                        @if(empty(session("email")))
                        <div class="header__top__right__auth">
                            <a href="{{ URL("web/login")}}"><i class="fa fa-user"></i> Login</a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="{{ URL("web/register")}}"><i class="fa fa-user"></i> Register</a>
                        </div>
                        @else
                        <div class="header__top__right__auth">
                            <a href="{{ URL("web/logout")}}"><i class="fa fa-user"></i> Logout</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ URL("web") }}"><img src="{{ Asset("img/logo2.png")}}" alt=""></a>
                </div>
            </div>
            <div class=" col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ URL("web") }}">Home</a></li>
                        <li><a href="{{URL("web/shop")}}">Shop</a></li>
                        <li><a href="{{URL("web/product")}}">Product</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{URL("web/category")}}">Categories</a></li>
                                <li><a href="{{URL("web/shop_cart")}}">Shoping Cart</a></li>
                                <li><a href=" {{URL("web/checkout")}}">Check Out</a></li>
                                <li><a href="{{URL("web/orders")}}">Orders List</a></li>
                                <li><a href="{{URL("web/contact")}}">Contact</a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="{{ URL('web/fav_list') }}"><i class="fa fa-heart"></i></a></li>
                        <li><a href="{{ URL('web/shop_cart') }}"><i class="fa fa-shopping-bag"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->