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
            <tr>
                <th>Title</th>
                <td>{{$data['row']->title}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$data['row']->description}}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src="{{asset('uploads/images/blog/'.$data['row']->image)}}" height="200" width="200" alt="">
                </td>
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
