@extends('master')

@section('title', @trans('font.header.index.products'))

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">{{@trans('font.home.index.title')}}</a></li>
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('products') }}">{{@trans('font.header.index.products')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">
                @if($category_id == 0)
                ALL PRODUCT
                @elseif(isset($selected_category))
                {{ $selected_category->name }}
                @endif
            </li>
        </ol>
    </nav>
    <p id="titleee"> {{@trans('font.category.index.title')}}
        @if($category_id == 0)
        ALL PRODUCT
        @elseif(isset($selected_category))
        {{ $selected_category->name }}
        @endif
    </p>
    <form id="selectformm" action="" method="get">
        <select id="selectcategory" class="shadow-lg" name="category_id" onchange="handleChange(this)">
            <option value="0" @if ($category_id==0) @endif>{{ @trans('font.category1.index.title' )}}</option>
            @foreach ($category_list as $category)
            <option @if($category->id == $category_id) selected @endif value="{{ $category->id}}">{{ $category->name}}</option>
            @endforeach
        </select>
        <select id="selectcategory" class="shadow-lg" name="price_range" onchange="this.form.submit()">
            <option @if($price_range=='0:999999999' ) selected @endif value="0:999999999">{{ @trans('font.category2.index.title')}}</option>
            <option @if($price_range=='0:1000000' ) selected @endif value="0:1000000">0-1tr
            </option>
            <option @if($price_range=='1000000:2000000' ) selected @endif value="1000000:2000000">1tr-2tr
            </option>
            <option @if($price_range=='2000000:3000000' ) selected @endif value="2000000:3000000">2tr-3tr
            </option>
            <option @if($price_range=='3000000:999999999' ) selected @endif value="3000000:999999999">3tr-....
            </option>
        </select>
        <select id="selectcategory" class="shadow-lg" name="sort" onchange="this.form.submit()">
            <option @if($sort=='asc' ) selected @endif value="asc">{{ @trans('font.category3.index.title' )}}</option>
            <option @if($sort=='asc' ) selected @endif value="asc">{{ @trans('font.category4.index.title' )}}</option>
            <option @if($sort=='desc' ) selected @endif value="desc">{{ @trans('font.category5.index.title' )}}</option>
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
        <div id="page" style="margin-top: 20px;">
            {{ $products->withQueryString()->links() }}
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
        window.location.href = 'products?category_id=' + selectedValue + '&price_range=0%3A999999999&sort=asc';
    }
</script>

@endsection