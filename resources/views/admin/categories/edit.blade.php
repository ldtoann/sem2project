@extends('admin.layout')
@section('content')
<div class="row">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit an Category!</h1>
                            </div>
                            <form style="text-align: center;" class="user" action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input style="width: 70%;" type="text" name="name" class="form-control form-control-user" value="{{ $category->name }}" id="" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="desc" id="" class="form-control" cols="8" rows="7" placeholder="Description">{{ $category->desc }}</textarea>
                                </div>
                                <button style="width: 20%;text-align: center;" type="submit" class="btn btn-primary btn-user btn-block">
                                    Submit
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