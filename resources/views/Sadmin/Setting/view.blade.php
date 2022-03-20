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
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="col-xs-7 col-sm-6 col-lg-10">
        <table class="table table-dark">
        <tr>
            <th>
               name
            </th>
            <td>
               {{$data['row']->name}}
            </td>
        </tr>
        <tr>
            <th>
                Phone
            </th>
            <td>
                {{$data['row']->phone}}
            </td>
        </tr>
        <tr>
            <th>
                Email
            </th>
            <td>
                {{$data['row']->email}}
            </td>
        </tr>        <tr>
            <th>
               Facebook Link
            </th>
            <td>
                {{$data['row']->facebook}}
            </td>
        </tr>
        <tr>
            <th>
                Instagram Link
            </th>
            <td>
                {{$data['row']->instagram}}
            </td>
        </tr>        <tr>
            <th>
                Address
            </th>
            <td>
                {{$data['row']->address}}
            </td>
        </tr>
        <tr>
            <th>
                Owner Name
            </th>
            <td>
                {{$data['row']->owner}}
            </td>
        </tr>
        <tr>
            <th>
                Status
            </th>
            <td>
                @if($data['row']->status==1)
                    <a class="text-success">Active</a>
                @else
                    <a class="text-danger">De-active</a>
                @endif
            </td>
        </tr>


    </table>
    </div>

@endsection
