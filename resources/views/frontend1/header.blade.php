<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<div class="wrap">
    <div class="container">
        <div class="row">
            @foreach($data['setting'] as $settings)

            <div class="col-md-6 d-flex align-items-center">

                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>{{$settings->phone}}</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span>{{$settings->email}}</a>

                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
                    <p class="mb-0 d-flex">
                        <a href="{{$settings->facebook}}" class="d-flex align-items-center justify-content-center" target="_blank"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
{{--                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>--}}
                        <a href="{{$settings->instagram}}" class="d-flex align-items-center justify-content-center" target="_blank"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
{{--                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>--}}

                    </p>
                </div>
                <div class="reg">

                    <p class="mb-0">

                        @if(\Illuminate\Support\Facades\Auth::id()==NULL)
                        <a href="{{route('register')}}" class="mr-2">Sign Up</a>

                        <a href="{{ route('login') }}">Log In</a>
                        @else
                            <h5 style="color: black">{{auth()->user()->name}}</h5>

                        @endif
                    </p>
                        @endforeach


                </div>

            </div>

        </div>
    </div>
</div>
<body>



<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="">Liquor <span>store</span></a>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="{{route('product')}}">Products</a>
{{--                        <a class="dropdown-item" href="product-single.html">Single Product</a>--}}
{{--                        <a class="dropdown-item" href="cart.html">Cart</a>--}}
{{--                        <a class="dropdown-item" href="checkout.html">Checkout</a>--}}
                    </div>
                </li>
                <li class="nav-item"><a href="{{route('blog.all')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>


                @if(\Illuminate\Support\Facades\Auth::id() != NULL)
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                            <i class="nav-icon fas fa-sign-out-alt"></i>
                                            <p>
                                                Logout
                                            </p>
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                    @endif
                </p>
{{--                <p class="mb-0">--}}
{{--                    @if(\Illuminate\Support\Facades\Auth::id()==NULL)--}}

{{--                    <a href="{{route('register')}}" class="mr-2">Sign Up</a>--}}
{{--                    @elseif(\Illuminate\Support\Facades\Auth::id()!=NULL)--}}
{{--                    <a href="{{ route('login') }}">Log In</a>--}}
{{--                    @endif--}}

{{--                </p>--}}
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100 text-center">
                    <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
{{--                    <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>--}}
                </div>
            </div>
        </div>
    </div>
</div>
