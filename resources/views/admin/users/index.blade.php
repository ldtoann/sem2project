@extends('admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">User List</h1>
        </div>
        <div class="col-3">
            <a href="{{ route('admin.users.create') }}" class="btn-primary">Create New</a>
        </div>
    </div>

    <p class="mb-4">List users<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userList as $user)
                        <tr>
                            <td>#</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a class="badge bage-danger" href="{{route('admin.users.edit',$user->id)}}">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('admin.users.destroy',$user->id)}}" method="POST"></form>
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button type="submit">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@if(Session::has('message'))
<h3>{{Session::get('message')}}</h3>
@endif