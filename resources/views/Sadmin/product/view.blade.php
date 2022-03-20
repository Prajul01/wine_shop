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
                    <a href="{{ URL::previous() }}" class="btn btn-dark">Go Back</a>

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
    <div class="col-xs-7 col-sm-6 col-lg-10">
        <table class="table table-dark">
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <tr>
                <th>Name</th>
                <td>{{$data['row']->name}}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{$data['row']->categories->name}}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src="{{asset('uploads/images/product/'.$data['row']->image)}}" height="200" width="200" alt="">
                </td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$data['row']->description}}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{$data['row']->price}}</td>
            </tr>

            <tr>
                <th>Status</th>
                <td>@if($data['row']->status==1)
                        <a class="text-green">Active</a>
                    @else
                        <a class="text-red">Deactive</a>
                    @endif
                </td>
            </tr>

        </table>
    </div>

@endsection
