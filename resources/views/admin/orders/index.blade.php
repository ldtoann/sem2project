@extends('admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <h1 class="h3 mb-2 text-gray-800" style="text-align: center;font-weight: 900;">Order List</h1>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Status</th>
                            <th>Receiver</th>
                            <th>User</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0 @endphp
                        @foreach ($orderList as $order)
                        <tr @if($order->status == 'pending') class="order-pending" @else class="order-finished" @endif>
                            <td>{{ increment($i) }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->desc }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->receiver }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>
                                <a type="submit" class="btn btn-warning" href="{{ route('admin.orders.edit', $order->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('admin.orders.destroy', $order->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@if(Session::has('message'))
<h3>{{Session::get('message')}}</h3>
@endif