@extends('Sadmin.backend')
@section('title')
    Admin-Dashboard
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
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="col-xs-7 col-sm-6 col-lg-8">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
            </div>
            <div class="form-group-lg">
                <select data-live-search="true" class="form-select-col-xs-7 col-sm-6 col-lg-12"  for="product_category_id"  name="product_category_id">
                    <option value=" " class="form-control" >select Category</option>
                    @foreach( $data['product_category'] as $category)
                    <option  value="{{$category->id}}"  id="product_category_id" name="product_category_id">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image_file">Image</label>
                <input type="file" class="form-control" id="image_file" name="image_file" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description"  class="form-control" id="description" ></textarea>
{{--                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">--}}
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="radio" id="active"  name="status" value="1">
                <label for="Status">Active</label>
                <input type="radio" id="de-active" name="status" value="0">
                <label for="status">De-active</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
