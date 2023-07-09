@extends("web.layout.layout")

@section("title")
Product Listing
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
                        @foreach($list as $row)
                        <li><a href="#">{{$row->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search__form">
                    <form action="" method="GET" role="search">
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
                    <h2>All Products</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL("web")}}">Home</a>
                        <span>Product Listing</span>
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
            <h4>Product Listing <a style="float:right" href="{{URL("web/product/create")}}"> <button class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Add Product</button></a></h4>

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $row)

                    <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td><img width="500px" height="100px" src="{{ Asset($row->featured_image) }}" alt="{{$row->name}}"/></td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->category_id}}</td>
                        <td>{{$row->description}}</td>
                        <td>
                            <a href="{{ URL('web/product/'.$row->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ URL('web/product',$row->id) }}"><i class="fa fa-remove"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
