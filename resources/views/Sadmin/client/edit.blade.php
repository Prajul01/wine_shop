@extends('Sadmin.backend')
@section('title')
    Client-Edit
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
        <form action="{{route('client.update',$data['row']->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$data['row']->name}}">
            </div>
            <div>
                <label for="message">Message</label>
                <input type="text" name="message" class="form-control" value="{{$data['row']->message}}">
            </div>
            <div>
                <label for="image_file">Image</label>
                <input type="file" class="form-control" id="image_file" name="image_file" placeholder="">

                <img src="{{asset('uploads/images/client/'.$data['row']->image)}}" height="300" width="300" alt="">

            </div>
            <div>
                <label for="degination">Degination</label>
                <input type="text" name="degination" class="form-control" value="{{$data['row']->degination}}">
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
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
