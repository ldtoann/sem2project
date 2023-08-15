@extends('admin.layout')
@section('content')
<div class="main">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 style="font-weight: 700;">Edit an User!</h1>
                    </div>
                    <form style="text-align: center;" class="user" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-user">
                            <div class="create5">
                                <input style="width: 72%;" name="name" value="{{ $user->name }}" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                            </div>
                        </div>
                        <br>
                        <div class="form-user">
                            <input style="width: 72%;" name="email" value="{{ $user->email }}" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <br>
                        <div class="form-user">
                            <input style="width: 72%;" name="password" value="{{ $user->password }}" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <br>
                        <div class="form-user8" style="padding-left: 22px;" >
                            <select name="role" style="width: 56%;height:50px;border-radius: 10rem;padding-left: 12px;">
                                <option @if($user->role == 'user') selected @endif value="user">User</option>
                                <option @if($user->role == 'admin') selected @endif value="admin">Admin</option>
                            </select>
                        </div>
                        <br>
                        <button style="width: 20%;" class="btn btn-primary btn-user">
                            Submit
                        </button>
                        <a href="{{route ('admin.dashboard')}}" style="width: 20%;" class="btn btn-danger btn-user">
                            Canel
                        </a>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection