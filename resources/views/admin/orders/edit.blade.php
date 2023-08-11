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
                                <h1 class="h4 text-gray-900 mb-4">Edit an Order!</h1>
                            </div>
                            <form class="user" action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="name" type="name" value="{{$order->name}}" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="desc" value="{{$order->desc}}" type="desc" class="form-control form-control-user" id="exampleInputEmail" placeholder="Desc">
                                </div>
                                <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option @if($order->status == 'pending') selected @endif value="pending">Pending</option>
                                        <option @if($order->status == 'finished') selected @endif value="finished">Finished</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="receiver" value="{{$order->receiver}}" type="receiver" class="form-control form-control-user" id="exampleInputRole" placeholder="receiver">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" disabled name="user_id" value="{{$order->user->name}}" type="price" class="form-control form-control-user" id="exampleInputRole" placeholder="user_id">
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