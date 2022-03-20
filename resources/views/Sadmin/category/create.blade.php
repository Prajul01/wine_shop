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
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="col-xs-7 col-sm-6 col-lg-8">
        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                       placeholder="Enter name">

            </div>
            <div class="form-group">
                <label for="image_file">Image</label>
                <input type="file" class="form-control" id="image_file" name="image_file" placeholder="Password">
            </div>
            <div class="form-check">
                <label for="status">Status</label>
                <input type="radio" id="active" name="status" value="1">
                <label for="Status">Active</label>
                <input type="radio" id="de-active" name="status" value="0">
                <label for="Status">De-active</label><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
