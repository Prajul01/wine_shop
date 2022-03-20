
@extends('frontend1.master')
@section('content')


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>All Blogs</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($data['blogs'] as $blog)

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
@endsection

