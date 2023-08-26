@extends('master')

@section('title', @trans('font.header.index.products'))

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">{{@trans('font.home.index.title')}}</a></li>
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('allProducts') }}">{{@trans('font.header.index.products')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">ALL PRODUCT</li>
        </ol>
    </nav>
    <p id="titleee"> {{@trans('font.category.index.title')}} ALL PRODUCT</p>
    <form id="selectformm" action="" method="get">
        <input type="hidden" name="category_id" value="">
        <select id="selectcategory" class="shadow-lg" name="category" onchange="handleChange(this)">
            <option value="">{{ @trans('font.category1.index.title' )}}</option>
            <option value="">NIKE
            </option>
            <option value="">ADIDAS
            </option>
            <option value="">VANS
            </option>
            <option value="">CONVERSE
            </option>
        </select>
        <select id="selectcategory" class="shadow-lg" name="price_range" onchange="this.form.submit()">
            <option value="">{{ @trans('font.category2.index.title' )}}</option>
            <option value="">0-1tr
            </option>
            <option value="">1tr-2tr
            </option>
            <option value="">2tr-3tr
            </option>
            <option value="">3tr-4tr
            </option>
        </select>
        <select id="selectcategory" class="shadow-lg" name="sort_order" onchange="this.form.submit()">
            <option value="">{{ @trans('font.category3.index.title' )}}</option>
            <option value="">{{ @trans('font.category4.index.title' )}}</option>
            <option value="">{{ @trans('font.category5.index.title' )}}</option>
        </select>
    </form>
    <div id="main3" class="text-center">
        <div id="item">
            @foreach ($products as $product)
            <a id="item_link" href="{{ route('product.show', $product->slug) }}">
                <div id="item_col">
                    @php $thumbnail = $product->getMedia('images')->first() @endphp
                    @if($thumbnail)
                    <img src="{{ $thumbnail->getUrl() }}" alt="image">
                    @endif
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