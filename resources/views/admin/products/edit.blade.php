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
                                <h1 class="h4 text-gray-900 mb-4">Edit an Product!</h1>
                            </div>
                            <form style="text-align: center;" class="user" action="{{ route('admin.products.update', $product->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="name" value="{{ $product->name }}" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="desc" value="{{ $product->desc }}" type="desc" class="form-control form-control-user" id="exampleInputEmail" placeholder="Desc">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="quantity" value="{{ $product->quantity }}" type="quantity" class="form-control form-control-user" id="exampleInputPassword" placeholder="Quantity">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="slug" value="{{ $product->slug }}" type="slug" class="form-control form-control-user" id="exampleInputRole" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="price" value="{{ $product->price }}" type="price" class="form-control form-control-user" id="exampleInputRole" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="category_id" value="{{ $product->category_id }}" type="category_id" class="form-control form-control-user" id="exampleInputRole" placeholder="Category_id">
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