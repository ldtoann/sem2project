@extends('master')

@section('title', @trans('font.header.index.products'))

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">{{@trans('font.home.index.title')}}</a></li>
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('products') }}">{{@trans('font.header.index.products')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
        </ol>
    </nav>
    <p id="titleee"> {{@trans('font.category.index.title')}} {{ $category->name }}</p>
    <div id="main3" class="text-center">
        <div id="item">
            @foreach ($category->products as $product)
            <a id="item_link" href="{{ route('product.show', $product->slug) }}">
                <div id="item_col">
                    <!-- <img src="{{ url('image/nike/itemnike1.1.jpg') }}"> -->
                    @php $thumbnail = $product->getMedia('images')->first() @endphp
                    @if($thumbnail)
                    <img src="{{ $thumbnail->getUrl() }}" alt="image">
                    @endif
                    <!-- <img src="{{ url('image/nike/itemnike1.jpg') }}" alt="" id="img-change"> -->
                    @php $thumbnail = $product->getMedia('images')->last() @endphp
                    @if($thumbnail)
                    <img id="img-change" src="{{ $thumbnail->getUrl() }}" alt="image">
                    @endif
                    <h6>{{ $product->name }}</h6>
                    <p id="saleprice" style="color: red; font-weight: 900;">{{ format_money($product->price) }}</p>
                    <p id="price">999.999.999 VND</p>
                    <div id="rate">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div id="main5" class="text-center">
        <div id="essential" class="text-center">
            <img class="shadow-lg" src="{{ url('image/essentials1.webp') }}">
            <img class="shadow-lg" src="{{ url('image/essentials2.webp') }}">
            <img class="shadow-lg" src="{{ url('image/essentials3.webp') }}">
        </div>
    </div>
</main>
<script>
    function handleChange(selectElement) {
        var selectedValue = selectElement.value;
        // Thực hiện hành động tương ứng với giá trị được chọn
        // Ví dụ: chuyển hướng đến trang category.php với category_id là selectedValue
        window.location.href = '_category.php?category_id=' + selectedValue;
    }
</script>
@endsection