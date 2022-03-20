@extends('Sadmin.backend')
@section('title')
    Admin-Dashboard
@endsection
@section('content')

    <div class="col-xs-7 col-sm-6 col-lg-10">
        @if(Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}}</p>
        @endif
        @if(Session::has('error'))
            <p class="alert alert-danger">{{Session::get('danger')}}</p>
        @endif
        <table class="table table-striped table-bordered"  id="example">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>

            </tr>

            <tbody>
            @foreach($data['row'] as $i=>$row)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$row->name}}</td>
                     <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>


                    <td>
                        @if($row->is_admin==1)

                            <p class="text-success">Admin</p>
                        @else
                            <p class="text-danger">User</p>

                        @endif
                    </td>

                    <td>
                        <a href="{{route('users.show',$row->id)}}" class="btn btn-sm btn-primary ">View</a>
                        <a href="{{route('users.edit',$row->id)}}" class="btn btn-sm btn-warning ">Edit</a>
                        <form class="d-inline" action="{{route('users.destroy',$row->id)}}" method="post">
                            <input type="hidden" name="_method" value="delete" />
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
