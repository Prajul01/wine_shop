

<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex">
                <div class="intro d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-support"></span>
                    </div>
                    <div class="text">
                        <h2>Online Support 24/7</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-1 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-cashback"></span>
                    </div>
                    <div class="text">
                        <h2>Money Back Guarantee</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-2 d-lg-flex w-100 ftco-animate">
                    <div class="icon">
                        <span class="flaticon-free-delivery"></span>
                    </div>
                    <div class="text">
                        <h2>Free Shipping &amp; Return</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            @foreach($data['product'] as $product)
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6">
                <img src="{{asset('uploads/images/product/'.$product->image)}}" alt="" style="height: 100%; width: 100%;  border-radius: 50%;">
             </div>
             <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                <div class="heading-section">
{{--                    <span class="subheading">Since 1905</span>--}}
                    <h2 class="mb-4">{{$product->name}}</h2>
                    {!! $product->description !!}
{{--                    <p class="year">--}}
{{--                        <strong class="number" data-number="115">0</strong>--}}
{{--                        <span>Years of Experience In Business</span>--}}
{{--                    </p>--}}
{{--                </div>--}}

            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">

    <div class="container">

        <div class="row">
            @foreach($data['category'] as $category)
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img"><img src="{{asset('uploads/images/category/'.$category->image)}}" class="circular--square" alt="" style=" height: 100%; width: 100%;clip-path: circle(); ">
                    </div>

                <h3>{{$category->name}}</h3>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Delightful offerings</span>
                <h2>Tastefully Yours</h2>
            </div>
        </div>
        <div class="row">
            @foreach($data['products'] as $product)
            <div class="col-md-3 d-flex">

                <div class="product ftco-animate">

                    <div class="img d-flex align-items-center justify-content-center " >
                           <div class="container" >
                            <img src="{{asset('uploads/images/product/'.$product->image)}}"  alt="" class="image" style=" height:auto; width: 100%;  ">
                            </div>
                        <div class="text text-center">


                            <h2>{{$product->name}}</h2>
                            <span class="category">{{$product->categories->name}}</span>
{{--                            <p class="mb-0"> <span class="price">{{$product->price}}</span></p>--}}
                        </div>



                    </div>
                </div>

                </div>
            @endforeach
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="{{route('product')}}" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section img" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach($data['client'] as $client)
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"> </div>
                            <div class="text">
                                <p class="mb-4">{{$client->message}}</p>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('uploads/images/client/'.$client->image)}}" class="circular--square" alt="" style=" height: 50%; width: 50%;clip-path: circle(); ">
                                    <div class="pl-3">
                                        <p class="name">{{$client->name}}</p>
                                        <span class="position">{{$client->Degination}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($data['blog'] as $blog)

            <div class="col-lg-6 d-flex align-items-stretch ftco-animate">

                <div class="blog-entry d-flex">

                    <img src="{{asset('uploads/images/blog/'.$blog->image)}}" class="block-20 img" alt="" style=" height: 500px; width: 500px; ">
                    <div class="text p-4 bg-light">
                        <div class="meta">
                            <p><span class="fa fa-calendar"></span>{{$blog->created_at}}</p>
                        </div>
                     {{Str::limit($blog->description,200)}}
                        <a href="{{route('blogs',$blog->id)}}" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

                    </div>

                </div>

            </div>

            @endforeach
        </div>

    </div>
</section>
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
