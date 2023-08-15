@extends('admin.layout')
@section('content')
<div class="main">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 style="font-weight: 700;">Create an Account!</h1>
                    </div>
                    <form class="user" style="text-align: center;" action="{{ route('admin.users.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="group"  style="padding-left: 6px;">
                                @if($errors->has('name'))
                                @foreach($errors->get('name') as $message)
                                <li style="color: red;">Please enter customer name!</li> <br>
                                @endforeach
                                @endif

                                <input style="width: 70%;" name="name" value="" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group" style="padding-left: 280px;">
                            <input style="width: 70%;" name="email" value="" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group"  style="padding-left: 280px;">
                            <input style="width: 70%;" name="password" value="" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="form-user" style="padding-left: 12px;">
                            <select name="role" style="width: 54%;height:50px;border-radius: 10rem;padding-left: 12px;">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <br>
                        <button style="width: 20%;" class="btn btn-primary btn-user">
                            Submit
                        </button>
                        <a href="{{ route('admin.dashboard') }}" style="width: 20%;" class="btn btn-danger btn-user ">
                            Canle
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection