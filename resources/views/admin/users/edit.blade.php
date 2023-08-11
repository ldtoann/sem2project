@extends('admin.layout')
@section('content')
<div class="main">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Edit an User!</h1>
                    </div>
                    <form class="user" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="name" value="{{ $user->name }}" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input style="width: 50%;" name="email" value="{{ $user->email }}" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input style="width: 50%;" name="password" value="{{ $user->password }}" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <select name="role" class="form-control">
                                <option @if($user->role == 'user') selected @endif value="user">User</option>
                                <option @if($user->role == 'admin') selected @endif value="admin">Admin</option>
                            </select>
                        </div>
                        <button style="width: 20%;" class="btn btn-primary btn-user btn-block">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection