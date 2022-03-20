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
    <div class="col-xs-7 col-sm-6 col-lg-10">
        @if(Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}}</p>
        @endif
        @if(Session::has('error'))
            <p class="alert alert-danger">{{Session::get('danger')}}</p>
        @endif
        <table class="table table-dark">


            <tbody>
            @foreach($data['rows'] as $i=>$row)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->description}}</td>
                    <td>
                        <img src="{{asset('uploads/images/page/'.$row->image)}}" height="100" width="100" alt="">
                    </td>
                    <td>
                        @if($row->status==1)

                            <p class="text-success">Active</p>
                        @else
                            <p class="text-danger">Dective</p>

                        @endif
                    </td>

                    <td>
                        <a href="{{route('blog.show',$row->id)}}" class="btn btn-sm btn-primary ">View</a>
                        <a href="{{route('blog.edit',$row->id)}}" class="btn btn-sm btn-warning ">Edit</a>
                        <form class="d-inline" action="{{route('blog.destroy',$row->id)}}" method="post">
                            <input type="hidden" name="_method" value="delete"/>
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger ">Delete</button>

                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>

        </table>
    </div>

@endsection
