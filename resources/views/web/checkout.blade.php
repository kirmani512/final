@extends("web.layout.layout")
@section("title")
CheckOut
@endsection
@section("content")
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <!--div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div-->
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
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL("web")}}">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> <a href="{{URL("web/shop")}}">Click here</a> for further shopping
                </h6>
            </div>
        </div>
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="{{url('place_order')}}" method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="checkout__input">
                            <p>Name<span>*</span></p>
                            <input type="text" name="name" placeholder="Name" class="checkout__input__add">
                        </div>

                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" placeholder="Address" class="checkout__input__add">
                        </div>
                        <div class="checkout__input">
                            <p>City<span>*</span></p>
                            <input type="text" name="city">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
            <div class="col-lg-12 col-md-12">
                <div class="checkout__order">
                    <h4>Your Order</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $row)
                            <th scope="row" {{$row->view_id}}>
                                <tr>
                                    <td class="shoping__cart__name">
                                        <h5>{{ $row->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <h5>Rs{{ $row->price }}</h5>
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
                                        <a href="{{ URL('web/remove_cart',$row->view_id) }}"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <div class="checkout__order__products">Total <span>Rs {{ $total }}</span></div>
                    <input class="btn btn-primary" type="submit" value="Place Order" />

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
