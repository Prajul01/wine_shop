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
    <div class="col-xs-12 col-sm-12 col-lg-12" >
        @if(Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}}</p>
        @endif
        @if(Session::has('error'))
            <p class="alert alert-danger">{{Session::get('danger')}}</p>
        @endif
    <table class="table table table-bordered"  id="example" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
<tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Category</th>
    <th>Image</th>
    <th>Description</th>
    <th>Price</th>
    <th>Status</th>
    <th>Action</th>
</tr>
        @foreach($data['rows'] as $i=>$row)
            <tr>

                <td>{{$i+1}}</td>
                <td>{{$row->name}}</td>
                <td>
                   {{$row->categories->name}}


                </td>

                <td>
                    <img src="{{asset('uploads/images/product/'.$row->image)}}" height="100" width="100" alt="">
                </td>
                <td>{{$row->description}}</td>
                <td>{{$row->price}}</td>
                <td>@if($row->status==1)
                        <a class="text-success">
                            Active
                        </a>
                    @else
                        <a class="text-danger">
                        De-active
                        </a>
                    @endif

                </td>
                <td class="col-3">
                    <a href="{{route('product.show',$row->id)}}"class="btn btn-sm btn-primary ">View</a>
                    <a href="{{route('product.edit',$row->id)}}" class="btn btn-sm btn-warning ">Edit</a>
                    <form class="d-inline" action="{{route('product.delete',$row->id)}}" method="post">
                        <input type="hidden" name="_method" value="delete" />
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger ">Delete</button>

                    </form>
                </td>
                @endforeach
            </tr>
    </table>
    </div>
@endsection
