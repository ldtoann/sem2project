@extends('master')

@section('title', 'HOME')

@section('content')
<main>
    <div id="main1">
        <div class="row">
            <div id="col_main1_left" class="col-8">
                <img src="{{ url('image/pano1.jpg') }}">
            </div>
            <div id="col_main1_right" class="col-4">
                <img src="{{ url('image/pano2.jpg') }}">
                <img src="{{ url('image/pano3.jpg') }}">
            </div>
        </div>
    </div>
    <div id="main2" class="text-center">
        <div id="line"></div>
        <p id="title">OUR COMMITMENT</p>
        <div id="commitmentinfo">
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro1.png') }}">
                <h5>FREESHIP</h5>
                <p>IN HO CHI MINH CITY AND OUT OF TOWN WITH 2 PAIRS OR MORE.</p>
            </div>
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro2.png') }}">

                <h5>SHIPPING POLICY</h5>
                <p>SUPPORT PAYMENT DELIVERY AND FOR INSPECTION OF GOODS.</p>
            </div>
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro3.png') }}">

                <h5>QUALITY ASSURANCE</h5>
                <p>COMMITMENT TO IMAGES AND QUALITY PRODUCTS COM LIKE.</p>
            </div>
        </div>
    </div>
    <div id="main4" class="text-center">
        <div id="line"></div>
        <p id="title">NEW COLLECTION</p>
        <div id="advertisessss" class="text-center">
            <img src="{{ url('image/quangcao1.jpeg') }}">
            <img src="{{ url('image/quangcao2.webp') }}">
        </div>
    </div>
    <div id="main3" class="text-center">
        <div id="line"></div>
        <p id="title">POWERFUL PRODUCTS</p>
        <div id="item">
            @foreach ($productList as $product)
            <a id="item_link" href="{{ route('product.show', $product->slug) }}">
                <div id="item_col">
                    <img src="{{ url('image/nike/itemnike1.1.jpg') }}">
                    <img src="{{ url('image/nike/itemnike1.jpg') }}" alt="" id="img-change">
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
        <a id="xemthem" href="_category.php?category_id=1">SEE THEM</a>
    </div>
    <div id="main5" class="text-center">
        <!-- <div id="line"></div>
            <p id="title">THE ESSENTIALS</p> -->
        <div id="essential" class="text-center">
            <img class="shadow-lg" src="{{ url('image/essentials1.webp') }}">
            <img class="shadow-lg" src="{{ url('image/essentials2.webp') }}">
            <img class="shadow-lg" src="{{ url('image/essentials3.webp') }}">
        </div>
    </div>
</main>
@endsection