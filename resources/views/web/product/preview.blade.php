@extends("web.layout.layout")

@section("title")
{{ $title }}
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
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">

                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+92 300-547-2357</h5>
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
<section class="breadcrumb-section set-bg" data-setbg="{{ Asset("img/breadcrumb.jpg") }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL("web")}}">Home</a>
                        <span>{{ $title }}</span>
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
        <div class="checkout__form">
            <h4>
                Delete
                Product </h4>
            <form action="{{URL("web/product",$id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$id}}" />
                @method("delete")


                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Product Name<span>*</span></p>
                                    <input value="{{ !empty($id) ? $obj->title: old("title")}}" disabled name="name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Category<span>*</span></p>
                                    <input value="{{!empty($id) ? $obj->category_id:old("category_id")}}" disabled name="price" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Description<span>*</span></p>
                            <input disabled value="{{!empty($id) ? $obj->description: old("value")}}" name="description" type="text">

                        </div>

                    </div>
                    <div class="col-lg-12 col-md-12">

                        <input class="btn btn-danger" type="submit" value="Delete product" />

                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
