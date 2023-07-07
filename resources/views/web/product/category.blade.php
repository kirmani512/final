@extends("web.layout.layout")

@section("title")

Add Category

@endsection

@section("content")


<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>
                Add Category
            </h4>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{URL("web/add_category")}}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Category Name<span>*</span></p>
                                    <input value="{{ old("title") }}" name="title" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">

                        <input class="btn btn-primary" type="submit" value="Add Category" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
