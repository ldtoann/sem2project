@extends('master')

@section('title', 'Cart')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="_home1.php">HOME</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">CARTs</li>
        </ol>
    </nav>
    <p id="titlecart"><i class="fa-solid fa-cart-shopping"></i> DANH SÁCH GIỎ HÀNG</p>
    <div class="row">
        <div class="col-8">
            <div id="maincart">
                <div id="rowinfonamecart" class="row">
                    <div id="infonamecart" class="col-2">SẢN PHẨM</div>
                    <div id="infonamecart" class="col-4"></div>
                    <div id="infonamecart" class="col text-center">ĐƠN GIÁ</div>
                    <div id="infonamecart" class="col text-center">SỐ LƯỢNG</div>
                    <div id="infonamecart" class="col text-center">TỔNG</div>
                    <div id="infonamecart" class="col-1 text-end">DELETE</div>
                </div>
                <hr>
                <div id="cartlist" class="row">
                    <div id="cartimgproduct" class="col-2"><img src="https://resources.smatestore.com/product/63871bfcf33f490d58571802/thumbnail/0/HEn2ULmgPeun71alsz.jpg" alt=""></div>
                    <div id="cartnameproduct" class="col-4">
                        <a href=""> Nike Air Jordan 1 Low x Travis Scott ‘Sail and Ridgerock’</a><br>sz42
                    </div>
                    <div id="cartpriceproduct" class="col text-center">
                        45600000đ
                    </div>
                    <div id="cartquantityproduct" class="col text-center"></div>
                    <div id="cartlastpriceproduct" class="col text-center">45600000đ</div>
                    <div id="cartdeleteproduct" class="col-1 text-end"><i class="fa fa-remove"></i></div>
                </div>
                <hr>
                <div id="cartlist" class="row">
                    <div id="cartimgproduct" class="col-2"><img src="https://resources.smatestore.com/product/63ddf55893da78f1d317bbcb/thumbnail/0/LklvghTzeSCfr6UzVP.jpg" alt=""></div>
                    <div id="cartnameproduct" class="col-4">
                        <a href=""> GUCCI RHYTON LOGO NY</a><br>sz42
                    </div>
                    <div id="cartpriceproduct" class="col text-center">
                        37500000đ
                    </div>
                    <div id="cartquantityproduct" class="col text-center"></div>
                    <div id="cartlastpriceproduct" class="col text-center">37500000đ</div>
                    <div id="cartdeleteproduct" class="col-1 text-end"><i class="fa fa-remove"></i></div>
                </div>
                <hr>
                <div id="cartlist" class="row">
                    <div id="cartimgproduct" class="col-2"><img src="https://resources.smatestore.com/product/617a580f8b520f05ab1fbcb0/thumbnail/0/OMtqxLcEEnumJXz1Je.jpg" alt=""></div>
                    <div id="cartnameproduct" class="col-4">
                        <a href=""> ULTRA BOOST 7.0 BLACK-WHITE</a><br>sz42
                    </div>
                    <div id="cartpriceproduct" class="col text-center">
                        2500000đ
                    </div>
                    <div id="cartquantityproduct" class="col text-center"></div>
                    <div id="cartlastpriceproduct" class="col text-center">2500000đ</div>
                    <div id="cartdeleteproduct" class="col-1 text-end"><i class="fa fa-remove"></i></div>
                </div>
                <hr>
                <div id="cartlist" class="row">
                    <div id="cartimgproduct" class="col-2"><img src="https://resources.smatestore.com/product/617a580f8b520f05ab1fbcb0/thumbnail/0/OMtqxLcEEnumJXz1Je.jpg" alt=""></div>
                    <div id="cartnameproduct" class="col-4">
                        <a href=""> ULTRA BOOST 7.0 BLACK-WHITE</a><br>sz42
                    </div>
                    <div id="cartpriceproduct" class="col text-center">
                        2500000đ
                    </div>
                    <div id="cartquantityproduct" class="col text-center"></div>
                    <div id="cartlastpriceproduct" class="col text-center">2500000đ</div>
                    <div id="cartdeleteproduct" class="col-1 text-end"><i class="fa fa-remove"></i></div>
                </div>
                <hr>
            </div>
            <a href="_pay.php">Thanh Toán</a>
        </div>
        <div id="cartpanel" class="col-4">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano1.jpg') }}">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano2.jpg') }}">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano3.jpg') }}">
        </div>
    </div>
</main>
@endsection