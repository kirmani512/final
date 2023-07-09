@extends("web.layout.layout")
@section("title")
Shopping cart
@endsection
@section("content")
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <span></span>
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
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL("web")}}">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $row)
                            <th scope="row" {{$row->cart_id}}>/th>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img width="100px" height="100px" src="{{ Asset($row->featured_image) }}" alt="">
                                    </td>
                                    <td class="shoping__cart__name">
                                        <h5>{{ $row->title }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <h5>Rs&nbsp;{{ $row->price }}</h5>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <h5>Rs&nbsp;{{ $row->price}}</h5>
                                    </td>
                                    <td>
                                        <a href="{{ URL('web/remove_cart',$row->cart_id) }}"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="{{ URL("web/shop") }}" <input class="btn btn-success" type="submit" />CONTINUE SHOPPING</a>
                    <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                        Upadate Cart</a> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <!-- <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span>Rs {{ $total }}</span></li>
                        <li>Total <span>Rs {{ $total }}</span>
                        </li>
                    </ul>
                    <a href=" {{ URL("web/checkout") }}" class=" primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
@endsection
