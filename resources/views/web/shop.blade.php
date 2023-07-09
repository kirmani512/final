@extends("web.layout.layout")
@section("title")
Shop
@endsection
@section("content")
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
                    </div>
                    <ul>
                        @foreach($catlist as $row)
                        <li><a href="#">{{$row->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#" method="GET">
                            <input type="search" name="search" placeholder="What do yo u need?" value="">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+92 300 547 2357</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ Asset("img/bg.jpg") }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2> Shop</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL('web')}}">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="row">
        @foreach($list as $row)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="{{ Asset($row->featured_image) }}">
                    <ul class="product__item__pic__hover">
                        @if(!empty(session("email")))
                        <li><a href="{{ URL('web/fav',$row->id) }}"><i class="fa fa-heart"></i></a></li>
                        <li><a href="{{ URL('web/add_cart',$row->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                        @endif
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="{{URL("web/shop_details", $row->id)}}">{{$row->name}}</a></h6>
                    <h5>Rs&nbsp;{{ $row->price }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="product__pagination">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
    </div>
</section>
<!-- Product Section End -->
@endsection
