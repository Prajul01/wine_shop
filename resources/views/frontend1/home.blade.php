{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}

{{--    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">--}}
{{--</head>--}}
{{--<div class="wrap">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-6 d-flex align-items-center">--}}
{{--                                @foreach($data['setting'] as $settings)--}}
{{--                                    <p class="mb-0 phone pl-md-2">--}}
{{--                                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>{{$settings->phone}}</a>--}}
{{--                                        <a href="#"><span class="fa fa-paper-plane mr-1"></span>{{$settings->email}}</a>--}}
{{--                                        @endforeach--}}
{{--                                    </p>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 d-flex justify-content-md-end">--}}
{{--                <div class="social-media mr-4">--}}
{{--                    <p class="mb-0 d-flex">--}}
{{--                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>--}}
{{--                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>--}}
{{--                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>--}}
{{--                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>--}}

{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="reg">--}}

{{--                    <p class="mb-0">--}}

{{--                        <a href="{{route('register')}}" class="mr-2">Sign Up</a>--}}
{{--                        <a href="{{ route('login') }}">Log In</a>--}}

{{--                    </p>--}}


{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<body>--}}



{{--<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="">Liquor <span>store</span></a>--}}
{{--        <div class="collapse navbar-collapse" id="ftco-nav">--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <li class="nav-item active"><a href="{{route('indexlogin')}}" class="nav-link">Home</a></li>--}}
{{--                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdown04">--}}
{{--                        <a class="dropdown-item" href="{{route('productlogin')}}">Products</a>--}}
{{--                        <a class="dropdown-item" href="product-single.html">Single Product</a>--}}
{{--                        <a class="dropdown-item" href="cart.html">Cart</a>--}}
{{--                        <a class="dropdown-item" href="checkout.html">Checkout</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                --}}{{--                <li class="nav-item"><a href="{{route('blog.all')}}" class="nav-link">Blog</a></li>--}}
{{--                <li class="nav-item"><a href="{{route('contactlogin')}}" class="nav-link">Contact</a></li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                                                     document.getElementById('logout-form').submit();" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-sign-out-alt"></i>--}}
{{--                        <p>--}}
{{--                            Logout--}}
{{--                        </p>--}}
{{--                    </a>--}}


{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--                </p>--}}
{{--                <p class="mb-0">--}}

{{--                    <a href="{{route('register')}}" class="mr-2">Sign Up</a>--}}
{{--                    <a href="{{ route('login') }}">Log In</a>--}}
{{--                </p>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<!-- END nav -->--}}

{{--<div class="hero-wrap" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">--}}
{{--    <div class="overlay"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row no-gutters slider-text align-items-center justify-content-center">--}}
{{--            <div class="col-md-8 ftco-animate d-flex align-items-end">--}}
{{--                <div class="text w-100 text-center">--}}
{{--                    <h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>--}}
{{--                    --}}{{--                    <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--////////////////////////////////////////////////////////////////////////////////////////////homecontent/////////////////////////////--}}
{{--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}


{{--<section class="ftco-intro">--}}
{{--    <div class="container">--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col-md-4 d-flex">--}}
{{--                <div class="intro d-lg-flex w-100 ftco-animate">--}}
{{--                    <div class="icon">--}}
{{--                        <span class="flaticon-support"></span>--}}
{{--                    </div>--}}
{{--                    <div class="text">--}}
{{--                        <h2>Online Support 24/7</h2>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 d-flex">--}}
{{--                <div class="intro color-1 d-lg-flex w-100 ftco-animate">--}}
{{--                    <div class="icon">--}}
{{--                        <span class="flaticon-cashback"></span>--}}
{{--                    </div>--}}
{{--                    <div class="text">--}}
{{--                        <h2>Money Back Guarantee</h2>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 d-flex">--}}
{{--                <div class="intro color-2 d-lg-flex w-100 ftco-animate">--}}
{{--                    <div class="icon">--}}
{{--                        <span class="flaticon-free-delivery"></span>--}}
{{--                    </div>--}}
{{--                    <div class="text">--}}
{{--                        <h2>Free Shipping &amp; Return</h2>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section ftco-no-pb">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            --}}{{--            @foreach($data['product'] as $product)--}}
{{--            --}}{{--                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6">--}}
{{--            --}}{{--                    <img src="{{asset('uploads/images/product/'.$product->image)}}" alt="" style="height: 100%; width: 100%;  border-radius: 50%;">--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">--}}
{{--            --}}{{--                    <div class="heading-section">--}}
{{--            --}}{{--                        --}}{{----}}{{--                    <span class="subheading">Since 1905</span>--}}
{{--            --}}{{--                        <h2 class="mb-4">{{$product->name}}</h2>--}}
{{--            --}}{{--                        {!! $product->description !!}--}}
{{--            --}}{{--                        --}}{{----}}{{--                    <p class="year">--}}
{{--            --}}{{--                        --}}{{----}}{{--                        <strong class="number" data-number="115">0</strong>--}}
{{--            --}}{{--                        --}}{{----}}{{--                        <span>Years of Experience In Business</span>--}}
{{--            --}}{{--                        --}}{{----}}{{--                    </p>--}}
{{--            --}}{{--                        --}}{{----}}{{--                </div>--}}

{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                    @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section ftco-no-pb">--}}

{{--    <div class="container">--}}

{{--        --}}{{--        <div class="row">--}}
{{--        --}}{{--            @foreach($data['category'] as $category)--}}
{{--        --}}{{--                <div class="col-lg-2 col-md-4 ">--}}
{{--        --}}{{--                    <div class="sort w-100 text-center ftco-animate">--}}
{{--        --}}{{--                        <div class="img"><img src="{{asset('uploads/images/category/'.$category->image)}}" class="circular--square" alt="" style=" height: 100%; width: 100%;clip-path: circle(); ">--}}
{{--        --}}{{--                        </div>--}}

{{--        --}}{{--                        <h3>{{$category->name}}</h3>--}}
{{--        --}}{{--                    </div>--}}
{{--        --}}{{--                </div>--}}
{{--        --}}{{--            @endforeach--}}
{{--        --}}{{--        </div>--}}

{{--    </div>--}}

{{--</section>--}}

{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center pb-5">--}}
{{--            <div class="col-md-7 heading-section text-center ftco-animate">--}}
{{--                <span class="subheading">Our Delightful offerings</span>--}}
{{--                <h2>Tastefully Yours</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}{{--        <div class="row">--}}
{{--        --}}{{--            @foreach($data['products'] as $product)--}}
{{--        --}}{{--                <div class="col-md-3 d-flex">--}}

{{--        --}}{{--                    <div class="product ftco-animate">--}}

{{--        --}}{{--                        <div class="img d-flex align-items-center justify-content-center " >--}}
{{--        --}}{{--                            <div class="container" >--}}
{{--        --}}{{--                                <img src="{{asset('uploads/images/product/'.$product->image)}}"  alt="" class="image" style=" height:auto; width: 100%;  ">--}}
{{--        --}}{{--                            </div>--}}
{{--        --}}{{--                            <div class="text text-center">--}}


{{--        --}}{{--                                <h2>{{$product->name}}</h2>--}}
{{--        --}}{{--                                <span class="category">{{$product->categories->name}}</span>--}}
{{--        --}}{{--                                --}}{{----}}{{--                            <p class="mb-0"> <span class="price">{{$product->price}}</span></p>--}}
{{--        --}}{{--                            </div>--}}



{{--        --}}{{--                        </div>--}}
{{--        --}}{{--                    </div>--}}

{{--        --}}{{--                </div>--}}
{{--        --}}{{--            @endforeach--}}
{{--        --}}{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-4">--}}
{{--            --}}{{--            <a href="{{route('product')}}" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="ftco-section testimony-section img" style="background-image: url(images/bg_4.jpg);">--}}
{{--    <div class="overlay"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5">--}}
{{--            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">--}}
{{--                <span class="subheading">Testimonial</span>--}}
{{--                <h2 class="mb-3">Happy Clients</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row ftco-animate">--}}
{{--            <div class="col-md-12">--}}
{{--                --}}{{--                <div class="carousel-testimony owl-carousel ftco-owl">--}}
{{--                --}}{{--                    @foreach($data['client'] as $client)--}}
{{--                --}}{{--                        <div class="item">--}}
{{--                --}}{{--                            <div class="testimony-wrap py-4">--}}
{{--                --}}{{--                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"> </div>--}}
{{--                --}}{{--                                <div class="text">--}}
{{--                --}}{{--                                    <p class="mb-4">{{$client->message}}</p>--}}
{{--                --}}{{--                                    <div class="d-flex align-items-center">--}}
{{--                --}}{{--                                        <img src="{{asset('uploads/images/client/'.$client->image)}}" class="circular--square" alt="" style=" height: 50%; width: 50%;clip-path: circle(); ">--}}
{{--                --}}{{--                                        <div class="pl-3">--}}
{{--                --}}{{--                                            <p class="name">{{$client->name}}</p>--}}
{{--                --}}{{--                                            <span class="position">{{$client->Degination}}</span>--}}
{{--                --}}{{--                                        </div>--}}
{{--                --}}{{--                                    </div>--}}
{{--                --}}{{--                                </div>--}}
{{--                --}}{{--                            </div>--}}
{{--                --}}{{--                        </div>--}}
{{--                --}}{{--                    @endforeach--}}
{{--                --}}{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    </div>--}}
{{--</section>--}}


{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5">--}}
{{--            <div class="col-md-7 heading-section text-center ftco-animate">--}}
{{--                <span class="subheading">Blog</span>--}}
{{--                <h2>Recent Blog</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}{{--        <div class="row d-flex">--}}
{{--        --}}{{--            @foreach($data['blog'] as $blog)--}}

{{--        --}}{{--                <div class="col-lg-6 d-flex align-items-stretch ftco-animate">--}}

{{--        --}}{{--                    <div class="blog-entry d-flex">--}}

{{--        --}}{{--                        <img src="{{asset('uploads/images/blog/'.$blog->image)}}" class="block-20 img" alt="" style=" height: 500px; width: 500px; ">--}}
{{--        --}}{{--                        <div class="text p-4 bg-light">--}}
{{--        --}}{{--                            <div class="meta">--}}
{{--        --}}{{--                                <p><span class="fa fa-calendar"></span>{{$blog->created_at}}</p>--}}
{{--        --}}{{--                            </div>--}}
{{--        --}}{{--                            {{Str::limit($blog->description,200)}}--}}
{{--        --}}{{--                            <a href="{{route('blogs',$blog->id)}}" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>--}}

{{--        --}}{{--                        </div>--}}

{{--        --}}{{--                    </div>--}}

{{--        --}}{{--                </div>--}}

{{--        --}}{{--            @endforeach--}}
{{--        --}}{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
{{--<section class="ftco-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center mb-5">--}}
{{--            <div class="col-md-7 heading-section text-center ftco-animate">--}}
{{--                <span class="subheading">Blog</span>--}}
{{--                <h2>Recent Blog</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row d-flex">--}}

{{--            <div class="col-lg-18 d-flex align-items-stretch ftco-animate">--}}
{{--                @foreach($data['blog'] as $blog)--}}
{{--                <div class="blog-entry d-flex">--}}
{{--                     <img src="{{asset('uploads/images/blog/'.$blog->image)}}" class="block-20 img" alt="" style=" height: 500px; width: 500px;margin:5px;--}}
{{--    padding:  17px  17px ">--}}


{{--                    <div class="text p-4 bg-light">--}}
{{--                        <div class="meta">--}}
{{--                            <p><span class="fa fa-calendar"></span>{{$blog->created_at}}</p>--}}
{{--                        </div>--}}
{{--                        {{Str::limit($blog->description,200)}}--}}

{{--                        <a href="{{route('blogs')}}" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--///////////////////////////////////////////////////////////////footer/////////////////////////////////////////////////////--}}
{{--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--<footer class="ftco-footer">--}}
{{--    <div class="container">--}}
{{--        <div class="row mb-5">--}}
{{--            <div class="col-sm-12 col-md">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2 logo"><a href="#">Liquor <span>Store</span></a></h2>--}}
{{--                    <p>Far far away, behind the word mountains, far from the countries.</p>--}}
{{--                    <ul class="ftco-footer-social list-unstyled mt-2">--}}
{{--                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>--}}
{{--                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>--}}
{{--                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12 col-md">--}}
{{--                <div class="ftco-footer-widget mb-4 ml-md-4">--}}
{{--                    <h2 class="ftco-heading-2">My Accounts</h2>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12 col-md">--}}
{{--                <div class="ftco-footer-widget mb-4 ml-md-4">--}}
{{--                    <h2 class="ftco-heading-2">Information</h2>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12 col-md">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2">Quick Link</h2>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>--}}
{{--                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12 col-md">--}}
{{--                <div class="ftco-footer-widget mb-4">--}}
{{--                    <h2 class="ftco-heading-2">Have a Questions?</h2>--}}
{{--                    <div class="block-23 mb-3">--}}
{{--                        <ul>--}}
{{--                            <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>--}}
{{--                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>--}}
{{--                            <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-fluid px-0 py-5 bg-black">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}

{{--                    <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>--}}
{{--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}



{{--<!-- loader -->--}}
{{--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>--}}


{{--<script src="{{asset('frontend/js/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/popper.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/scrollax.min.js')}}"></script>--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>--}}
{{--<script src="{{asset('frontend/js/google-map.js')}}"></script>--}}
{{--<script src="{{asset('frontend/js/main.js')}}"></script>--}}
