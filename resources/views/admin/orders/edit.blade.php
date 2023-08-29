@extends('admin.layout')
@section('title', 'edit order')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    EDIT ORDER
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">
                        {{ $order->name }}
                    </span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--tabs">
            <div class="kt-portlet__body">
                <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                            <div class="kt-form kt-form--label-right">
                                <div class="kt-form__body">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body">
                                            <div class="row">
                                                <label class="col-xl-3"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <h3 class="kt-section__title kt-section__title-sm">Customer Order </h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" name="name" value="{{ $order->name }}" id="" placeholder="Name" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">User_id</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" name="user_id" value="{{$order->user_id}}" id="" placeholder="Name" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Receiver</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" name="receiver" value="{{ $order->receiver }}" id="" placeholder="receiver " readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Phonenumber</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" name="phonenumber" value="{{ $order->phonenumber }}" id="" placeholder="receiver " readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="address" value="{{ $order->address }}" placeholder="address" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Desc</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="desc" value="{{ $order->desc }}" placeholder="desc" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Price Order</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" name="price" value="{{ format_money( $order->price ) }}" id="" placeholder="price " readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <select name="status" class="form-control">
                                                        <option @if($order->status == 'pending') selected @endif value="pending">Pending</option>
                                                        <option @if($order->status == 'finished') selected @endif value="finished">Finished</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <button type="submit" class="btn btn-lg btn-upper" style="background-color: rgb(145,7,7); color:white; margin-left: 453px; padding: 10px 30px;">UPDATE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection