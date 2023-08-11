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
                                <h1 class="h4 text-gray-900 mb-4">Create an Product!</h1>
                            </div>
                            <form style="text-align: center;" class="user" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <input style="width: 50%;" name="quantity" value="" type="quantity" class="form-control form-control-user" id="exampleInputPassword" placeholder="Quantity">
                                </div>
                                <div class="form-group">
                                    <input style="width: 50%;" name="price" value="" type="price" class="form-control form-control-user" id="exampleInputRole" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <select name="category_id" style="width: 50%;" class="form-control form-control-user">
                                        @foreach($categoryList as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="block">
                                        <span class="sr-only">Choose File</span>
                                        <input type="file" name="images[]" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" multiple />
                                    </label>
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