@extends("web.layout.layout")
@section("title")
Add product
@endsection
@section("content")
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
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
                    <h2>Add Product</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL("web")}}">Home</a>
                        <span>Add Product</span>
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
                @if(!empty($id))
                Edit
                @else
                Add
                @endif
                Product</h4>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{"$error"}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(!empty($id))
            <form action="{{URL("web/product",$id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$id}}" />
                @method("put")
                @else
                <form action="{{URL("web/product")}}" method="POST" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Product Name<span>*</span></p>
                                        <input value="{{ !empty($id) ? $obj->title: old("title")}}" name="title" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Price<span>*</span></p>
                                    <input value="{{!empty($id) ? $obj->price:old("price")}}" name="price" type="text">
                                    @error("price")
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Description<span>*</span></p>
                                <input value="{{!empty($id) ? $obj->description: old("value")}}" name="description" type="text">
                            </div>
                            @if(empty($id))
                            <div class="checkout__input">
                                <p>Display Image<span>*</span></p>
                                <input name="featured_image" type="file">
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Category<span>*</span></p>
                                        <select name="category_id">
                                            <option value="">Select Category</option>
                                                <ul>
                                                @foreach($catlist as $row)
                                                <option value="{{$row->id}}">{{$row->title}}</option>
                                                @endforeach
                                                </ul>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="col-lg-12 col-md-12">
                            @if(!empty($id))
                            <input class="btn btn-primary" type="submit" value="Edit product" />
                            @else
                            <input class="btn btn-primary" type="submit" value="Add product" />
                            @endif
                        </div>
                    </div>
                </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
