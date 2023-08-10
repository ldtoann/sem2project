@extends('admin.layout')
@section('content')
<div class="row">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Order!</h1>
                            </div>
                            <form style="text-align: center;" class="user" action="{{ route('admin.orders.store') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="name" value="" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="desc" value="" type="desc" class="form-control form-control-user" id="exampleInputEmail" placeholder="Desc">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="status" value="" type="status" class="form-control form-control-user" id="exampleInputPassword" placeholder="Status">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="receiver" value="" type="receiver" class="form-control form-control-user" id="exampleInputRole" placeholder="Receiver">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="user_id" value="" type="price" class="form-control form-control-user" id="exampleInputRole" placeholder="User_id">
                                </div>
                                <button style="width: 20%;" class="btn btn-primary btn-user btn-block">
                                    Submit
                                </button>
                                <button style="width: 20%;" class="btn btn-primary btn-user btn-block">
                                    Canel
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection