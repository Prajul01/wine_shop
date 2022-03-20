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
        <form action="{{route('users.update',$data['row']->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$data['row']->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{$data['row']->email}}">
            </div>


               <div class="form-group">
                <label for="status">Admin</label>
                @if($data['row']->is_admin==1)
                    <input type="radio" id="is_admin" name="is_admin" value="1" checked>Yes
                    <input type="radio" id="is_admin" name="is_admin" value="0">No


                @else
                    <input type="radio" id="is_admin" name="is_admin" value="1">Yes
                    <input type="radio" id="is_admin" name="is_admin" value="0" checked>No
                @endif

            </div>


            <input type="submit" value="update" class="btn btn-primary">
        </form>
    </div>


@endsection
