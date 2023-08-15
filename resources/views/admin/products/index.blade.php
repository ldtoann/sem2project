@extends('admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 text-gray-800" style="text-align: center;font-weight: 900;">Product List</h1>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center;font-weight: 900;">
                            <th>ID</th>
                            <th>Thumbnail</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Quantity</th>
                            <th>Slug</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0 @endphp
                        @foreach ($productList as $product)
                        <tr style="text-align: center;font-weight: 900;">
                            <td>{{ increment($i) }}</td>
                            <td>
                                @php $thumbnail = $product->getMedia('images')->first()  @endphp
                                @if($thumbnail)
                                <img width="50" height="50" src="{{ $thumbnail->getUrl() }}" alt="">
                                @endif
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->desc }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->slug }}</td>
                            <td>{{ format_money($product->price) }}</td>
                            <td>{{ $product->category->name }}</td>


                            <td>
                                <a type="submit" class="edit" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button type="submit" class="delete">Delete</button>
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