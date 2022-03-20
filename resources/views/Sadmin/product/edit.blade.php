@extends('Sadmin.backend')
@section('title')
    Product-Edit
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8">
        <form action="{{route('product.update',$data['row']->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$data['row']->name}}">
            </div>
            <div class="form-group-lg">
                <label for="category">Category</label>
{{--                <input type="text" name="category" class="form-control" value="{{$data['row']->categories->name}}">--}}
                <select data-live-search="true" class="form-select-col-xs-7 col-sm-6 col-lg-12"  for="product_category_id"  name="product_category_id">
                    <option value=" {{$data['row']->product_category_id}}" class="form-control" >{{$data['row']->categories->name}}</option>

                    @foreach(  $data['catgeory'] as $category)
                        <option  value="{{$category->product_category_id}}"  id="product_category_id" name="product_category_id">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
{{--            <div>--}}
{{--                <label for="category">Category</label>--}}
{{--                <input type="text" name="category" class="form-control" value="{{$data['row']->categories->name}} ">--}}
{{--            </div>--}}
            <div>
                <label for="image_file">Image</label>
                <input type="file" class="form-control" id="image_file" name="image_file" placeholder="">

                <img src="{{asset('uploads/images/product/'.$data['row']->image)}}" height="300" width="300" alt="">

            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" value="{{$data['row']->description}}">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" value="{{$data['row']->price}}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                @if($data['row']->status==1)
                    <input type="radio" id="active" name="status" value="1" checked>Active
                    <input type="radio" id="de-active" name="status" value="0">De-active


                @else
                    <input type="radio" id="de-active" name="status" value="1">Active
                    <input type="radio" id="active" name="status" value="0" checked>De-active
                @endif

            </div>


            <input type="submit" value="update" class="btn btn-primary">
        </form>
    </div>


@endsection
