@extends("web.layout.layout")

@section("title")

Login Admin
@endsection

@section("content")


<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>
                Login Admin
            </h4>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{URL("web/login")}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input value="{{ old("email") }}" name="email" type="email">
                                    @error("email")
                                    <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input name="password" type="password">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <input class="btn btn-primary" type="submit" value="Login" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
