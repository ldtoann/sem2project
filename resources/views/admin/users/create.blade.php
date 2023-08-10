@extends('admin.layout')
@section('content')
<div class="main">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" style="text-align: center;" action="{{ route('admin.users.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="name" value="" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input style="width: 50%;" name="email" value="" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input style="width: 50%;" name="password" value="" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input style="width: 50%;" name="role" value="" type="role" class="form-control form-control-user" id="exampleInputRole" placeholder="role">
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