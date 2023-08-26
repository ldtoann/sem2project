@extends('master')

@section('title', @trans('font.home.index.title'))

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
        <p id="title">{{@trans('font.home.index.OURCOMMITMENT')}}</p>
        <div id="commitmentinfo">
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro1.png') }}">
                <h5>{{@trans('font.home.index.FREESHIP')}}</h5>
                <p>{{@trans('font.home.index.City')}}</p>
            </div>
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro2.png') }}">

                <h5>{{@trans('font.home.index.SHIPPINGPOLICY')}}</h5>
                <p>{{@trans('font.home.index.SHIP')}}</p>
            </div>
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro3.png') }}">

                <h5>{{@trans('font.home.index.QUALITY')}}</h5>
                <p>{{@trans('font.home.index.COMMEN')}}</p>
            </div>
        </div>
    </div>
    <div id="main4" class="text-center" style="height: 760px;">
        <div id="line"></div>
        <p id="title">{{@trans('font.home.index.NEW')}}</p>
        <div id="advertisessss" class="text-center" style="margin: 30px 0px;">
            <!-- <img src="{{ url('image/quangcao2.webp') }}"> -->
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false" style="height: 700px;margin: 20px 0px 35px 0px;">
                <div class="carousel-inner" style="height: 700px;">
                    <div class="carousel-item active" style="height: 700px;border-radius: 20px;">
                        <img id="poster" src="{{ url('image/posternike4.jpg') }}">
                    </div>
                    <div class="carousel-item" style="height: 700px;border-radius: 20px;">
                        <img id="poster" src="{{ url('image/posternike2.jpg') }}">
                    </div>
                    <div class="carousel-item" style="height: 700px;border-radius: 20px;">
                        <img id="poster" src="{{ url('image/posternike3.jpg') }}">
                    </div>
                    <div class="carousel-item" style="height: 700px;border-radius: 20px;">
                        <img id="poster" src="{{ url('image/posternike1.jpg') }}">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev" style="height: 700px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" style="height: 700px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div id="main3" class="text-center">
        <div id="line"></div>
        <p id="title">{{@trans('font.home.index.POW')}}</p>
        <div id="item">
            @foreach ($productList as $product)
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
        <a id="xemthem" href="{{ route('allProducts') }}">{{@trans('font.home.index.MORE')}}</a>
    </div>
    <div id="main5" class="text-center">
        <div id="essential" class="text-center">
            <img class="shadow-lg" src="{{ url('image/essentials1.webp') }}">
            <img class="shadow-lg" src="{{ url('image/essentials2.webp') }}">
            <img class="shadow-lg" src="{{ url('image/essentials3.webp') }}">
        </div>
    </div>
</main>
@endsection