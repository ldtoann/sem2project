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
                                <h1 style="font-weight: 800;">Create an Category!</h1>
                            </div>
                            <form class="user" action="{{ route('admin.categories.store') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="creat3">
                                        @if($errors->has('name'))
                                        @foreach($errors->get('name') as $message)
                                        <li style="color: red;">Please enter customer name at least 5 characters!</li><br>
                                        @endforeach
                                        @endif
                                        <input style="width: 60%;" type="text" name="name" class="form-control form-control-user" id="" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if($errors->has('desc'))
                                    @foreach($errors->get('desc') as $message)
                                    <li style="color: red;">Please enter description above 10 characters!</li><br>
                                    @endforeach
                                    @endif
                                    <textarea name="desc" id="" class="form-control" cols="10" rows="15" placeholder="Description"></textarea>
                                </div>
                                <button style="width: 30%;" type="submit" class="btn btn-primary btn-user btn-block">
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