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

    <div class="form-group col-xl-6 col-lg-6 col-md-8 col-sm-8">
        <form action="{{route('setting.update',$data['row']->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$data['row']->name}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control" value="{{$data['row']->phone}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{$data['row']->email}}">
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" class="form-control" value="{{$data['row']->facebook}}">
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" name="instagram" class="form-control" value="{{$data['row']->instagram}}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" value="{{$data['row']->address}}">
            </div>
            <div class="form-group">
                <label for="owner">Owner Name</label>
                <input type="text" name="owner" class="form-control" value="{{$data['row']->owner}}">
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
