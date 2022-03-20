@extends('frontend1.master')
@section('content')

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="{{asset('uploads/images/blog/'.$data['row']->image)}}" height="100%" width="100%" alt="">
                    </p>
    {{$data['row']->description}}
                </div>
            </div>
        </div>
    </section>





{{--    <div class="blog-entry d-flex">--}}

{{--        <img src="{{asset('uploads/images/blog/'.$blog->image)}}" class="block-20 img" alt="" style=" height: 500px; width: 500px; ">--}}
{{--        <div class="text p-4 bg-light">--}}
{{--            <div class="meta">--}}
{{--                <p><span class="fa fa-calendar"></span>{{$blog->created_at}}</p>--}}
{{--            </div>--}}
{{--            {{Str::limit($blog->description,200)}}--}}
{{--            <a href="{{route('blogs',$blog->id)}}" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>--}}

{{--        </div>--}}

{{--    </div>--}}
@endsection
