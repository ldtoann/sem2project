@extends('master')

@section('title', 'Search')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="_home1.php">HOME</a></li>
            <li id="linenext" class="breadcrumb-item"><a href="_category.php?category_id=1">PRODUCTs</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">KEY</li>
        </ol>
    </nav>
    <div id="main3" class="text-center">
        <!-- <div id="line"></div>
            <p id="title">SẢN PHẨM NỔI BẬT</p> -->
        <div id="item">
            <a id="item_link" href="">
                <div id="item_col">
                    <img src="{{ url('image/itemproduct1.jpg') }}">
                    <img src="{{ url('image/itemproduct2.jpg') }}" alt="" id="img-change">
                    <h6>le duy toan</h6>
                    <p id="saleprice">ádasdasd</p>
                    <p id="price">999.999.999đ</p>
                    <div id="rate">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</main>
@endsection