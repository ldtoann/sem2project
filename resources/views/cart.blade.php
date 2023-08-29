@extends('master')

@section('title', @trans('font.CART.index.title'))

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">{{@trans('font.home.index.title')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">{{@trans('font.pay.index.title')}}</li>
        </ol>
    </nav>
    <p id="titlecart"><i class="fa-solid fa-cart-shopping"></i> {{ @trans('font.category14.index.title' )}}</p>
    <div class="row">
        <div class="col-8">
            <table style="margin-left: 0px; width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 2%;"><span></span></th>
                        <th style="width: 10%;"><span>{{ @trans('font.home.index.product') }}</span></th>
                        <th style="width: 3%;"><span></span></th>
                        <th style="width: 25%;"><span></span></th>
                        <th style="width: 5%;"><span></span></th>
                        <th style="width: 15%;padding-left: 25px;"><span>{{ @trans('font.category2.index.title' )}}</span></th>
                        <th style="width: 15%;padding-left: 18px;"><span>{{ @trans('font.category8.index.title' )}}</span></th>
                        <th style="width: 15%;padding-left: 23px;"><span>{{ @trans('font.category11.index.title' )}}</span></th>
                        <th style="width: 10%;"><span>{{ @trans('font.category12.index.title' )}}</span></th>
                    </tr>
                </thead>
            </table>
            <hr>
            @foreach ($cart as $order)
            <table style="margin-left: 0px; width: 100%;">
                <thead>
                    <tr style="font-size: 14px;">
                        <th style="width: 12%;"><span><img src="{{ $order['thumbnail'] }}" width="100%"></span></th>
                        <th style="width: 3%;"><span></span></th>
                        <th style="width: 25%;"><span>{{ $order['name'] }} <br> Size : {{ $order['size'] }} </span></th>
                        <th style="width: 5%;"><span></span></th>
                        <th style="width: 15%;color: red;"><span>{{ format_money($order['price']) }}</span></th>
                        <th style="width: 15%;">
                            <span>
                                <form action="{{ route('cart.update' ,$order['productId']) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="quantity">
                                        <input id="quantitycarttt" onchange="this.form.submit()" name="quantity" type="number" min="1" step="1" class="quantity-input" value="{{ $order['quantity'] }}">
                                    </div>
                                </form>
                            </span>
                        </th>
                        <th style="width: 15%;color: red;"><span>{{ format_money(order_item_total($order['quantity'], $order['price'])) }}</span></th>
                        <th style="width: 10%;padding-left: 15px; ">
                            <span>
                                <form action="{{ route('cart.delete', $order['productId']) }}" class="col-1 text-end" method="post">
                                    @csrf
                                    @method('delete')
                                    <button id="deletecart" type="submit" class="fa fa-remove"></button>
                                </form>
                            </span>
                        </th>
                    </tr>
                </thead>
            </table>
            <hr>
            @endforeach
            <div id="totalcarts" class="row">
                <div id="total" class="col">
                    <p> <strong>{{ @trans('font.category13.index.title' )}}</strong> : {{ format_money(cart_total($cart,0)) }}</p>
                </div>
                <div id="totalpay" class="col text-end">

                </div>
            </div>
        </div>
        <div id="cartpanel" class="col-4">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano1.jpg') }}">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano2.jpg') }}">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano3.jpg') }}">
        </div>
    </div>
    <hr>
    <p id="titlecartss"><i class="fa-solid fa-credit-card"></i> THANH TOÁN</p>
    <form id="infomationpay" action="{{ route('checkout')}}" method="get">
        <div class="row">
            <div class="col">
                <h4 id="paytitle">THÔNG TIN KHÁCH HÀNG</h4>
                <div class="row">
                    <div id="infopay" class="">
                        <label for="kh_ten">Họ tên</label>
                        @auth
                        <input type="text" class="form-control" name="kh_ten" id="kh_ten" value="{{ Auth::user()->name }}" readonly="">
                        @else
                        <input type="text" class="form-control" name="kh_ten" id="kh_ten" value="" readonly="">
                        @endauth
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_email">Email</label>
                        @auth
                        <input type="text" class="form-control" name="kh_email" id="kh_email" value="{{ Auth::user()->email }}" readonly="">
                        @else
                        <input type="text" class="form-control" name="kh_email" id="kh_email" value="" readonly="">
                        @endauth
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_diachi">Địa chỉ</label>
                        <input type="text" class="form-control" name="kh_diachi" id="kh_diachi" value="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_diachi">Họ tên người nhận</label>
                        <input type="text" class="form-control" name="receiver" id="kh_diachi" value="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_dienthoai">Điện thoại</label>
                        <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai" value="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_ngaysinh">Ngày sinh</label>
                        <input type="text" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh" value="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_cmnd">Desception</label>
                        <input type="text" class="form-control" name="desc" id="kh_desc" value="">
                    </div>
                </div>
                <img id="anhnenkh" src="https://resources.smatestore.com/slider/0/9No2M7tL4nVw9ORcdU.jpg" alt="">
            </div>
            <div id="payenddd" class="col-5 shadow-lg" style="margin-left: 50px;">
                <h4 id="paytitless">GIỎ HÀNG</h4>
                <div id="paylist" class="row" style="padding: 0px 15px;">
                    @foreach ($cart as $order)
                    <table style="margin-bottom: 10px;font-size: 15px;">
                        <thead>
                            <tr>
                                <th style="width: 20%;"><img src="{{ $order['thumbnail'] }}" alt="" width="100%"></th>
                                <th style="width: 5%;"></th>
                                <th style="width: 45%;">{{ $order['name'] }}</th>
                                <th style="width: 30%; color: red;" class="text-end">{{ format_money(order_item_total($order['quantity'], $order['price'])) }}</th>
                            </tr>
                        </thead>
                    </table>
                    <hr>
                    @endforeach
                </div>
                <!-- <hr> -->
                <div id="paylist" class="row" style="font-size: 20px;">
                    <table style="margin-left: 0px; width: 100%;margin-bottom: 10px;">
                        <thead>
                            <tr>
                                <th style="width: 2%;"></th>
                                <th style="width: 98%;font-weight: 400; font-size: 17px;"><span><i class="fa-solid fa-cart-shopping" style="color: rgb(145, 7, 7);"></i>&nbsp;&nbsp; Giá sản phẩm : {{ format_money(cart_total($cart,0)) }}</span></th>
                            </tr>
                        </thead>
                    </table>
                    <table style="margin-left: 0px; width: 100%;margin-bottom: 10px;">
                        <thead>
                            <tr>
                                <th style="width: 2%;"></th>
                                <th style="width: 98%;font-weight: 400; font-size: 17px;"><span><i class="fa-solid fa-truck-fast" style="color: rgb(145, 7, 7);"></i>&nbsp;&nbsp; Phí ship : 50,000 VND</span></th>
                            </tr>
                        </thead>
                    </table>
                    <table style="margin-left: 0px; width: 100%;margin-bottom: 10px;">
                        <thead>
                            <tr>
                                <th style="width: 2%;"></th>
                                <th style="width: 65%;color: red; font-weight: 800;"><span>TOTAL &nbsp;:&nbsp; {{ format_money(cart_total($cart,50000)) }}</span></th>
                                <!-- <th style="width: 30%;" class="text-end"><span><a href="{{ route('checkout')}}" style="background-color: rgb(145, 7, 7); color: white;text-decoration: none; padding: 10px 30px;border-radius: 10px;">{{ @trans('font.category15.index.title' )}}</a></span></th> -->
                                <th style="width: 30%;" class="text-end"><button type="submit" style="background-color: rgb(145, 7, 7); color: white; padding: 5px 30px; border: none; border-radius: 10px;font-weight: 800;">{{ @trans('font.category15.index.title' )}}</button></th>
                                <th style="width: 3%;"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </form>
    <script>
        jQuery('<div class="quantity-nav"><div id="quantity-button" class="quantity-up"><p>+</p></div><div id="quantity-button" class="quantity-down"><p>-</p></div></div>').insertAfter('.quantity input');
        jQuery('.quantity').each(function() {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });
    </script>
</main>
@endsection