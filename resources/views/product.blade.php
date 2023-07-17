@extends('master')

@section('title', 'Product')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="">HOME</a></li>
            <li id="linenext" class="breadcrumb-item"><a href="">PRODUCTs</a></li>
            <li id="linenext" class="breadcrumb-item"><a href="">tên hãng chọn</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">tên sản phẩm chọn</li>
        </ol>
    </nav>
    <div id="itemdetailproduct" class="container shadow-lg">
        <div class="row">
            <div class="col-8">
                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" id="imageproductdetail" src="{{ url('image/itemproduct1.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" id="imageproductdetail" src="{{ url('image/itemproduct2.jpg') }}">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span id="nutslide" class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span id="nutslide" class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-4">
                <form action="" method="get">
                    <div id="name">
                        <p>le duy toan</p>
                    </div>
                    <div id="rates">
                        <p>Đánh Giá </p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div id="pricess">
                        <p id="saleprice">Giá Sản Phẩm : <strong> 1.000.000đ</strong> </p>
                        <p id="pricesss">999.999.999đ</p>
                    </div>
                    <p id="descc" style="margin-top: -2px;">Màu Sắc : <strong>xanh đỏ tím vàng</strong></p>
                    <hr>
                    <select class="form-control" id="sel1" name="categoryId" autofocus>
                        <option>Size</option>
                        <option>36</option>
                        <option>37</option>
                        <option>38</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input name="quantity" type="number" class="form-control" placeholder="soluong">
                    </div>
                </form>
                <button href="" type="button" class="btn btn-primary" id="liveToastBtn">them vao gio hang</button>
                <!-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="../../image/logo_page.png" class="rounded me-2" width="70px" height="auto">
                            <strong class="me-auto">Thông báo</strong>
                            <small>1 giây trước</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Đặt Hàng Thành Công
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</main>
@endsection