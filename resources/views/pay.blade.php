@extends('master')

@section('title', 'Pay')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">{{@trans('font.home.index.title')}}</a></li>
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('cart.index') }}">{{@trans('font.pay.index.title')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">{{@trans('font.pay1.index.title')}}</li>
        </ol>
    </nav>
    <p id="titlecartss"><i class="fa-solid fa-credit-card"></i> THANH TOÁN</p>
    <form id="infomationpay" action="" method="">
        <div class="row">
            <div class="col">
                <h4 id="paytitle">THÔNG TIN KHÁCH HÀNG</h4>
                <div class="row">
                    <div id="infopay" class="">
                        <label for="kh_ten">Họ tên</label>
                        <input type="text" class="form-control" name="kh_ten" id="kh_ten" value="Lê Duy Toàn" readonly="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_diachi">Địa chỉ</label>
                        <input type="text" class="form-control" name="kh_diachi" id="kh_diachi" value="7b Nguyễn Văn Trỗi Phường Tây Lộc Thành Phố Huế" readonly="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_dienthoai">Điện thoại</label>
                        <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai" value="0899084716" readonly="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_email">Email</label>
                        <input type="text" class="form-control" name="kh_email" id="kh_email" value="toanlee1311@gmail.com" readonly="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_ngaysinh">Ngày sinh</label>
                        <input type="text" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh" value="13/11/2001" readonly="">
                    </div>
                    <div id="infopay" class="">
                        <label for="kh_cmnd">CMND</label>
                        <input type="text" class="form-control" name="kh_cmnd" id="kh_cmnd" value="191918924" readonly="">
                    </div>
                </div>
                <img id="anhnenkh" src="https://resources.smatestore.com/slider/0/9No2M7tL4nVw9ORcdU.jpg" alt="">
            </div>
            <div id="payenddd" class="col-5 shadow-lg" style="margin-left: 50px;">
                <h4 id="paytitless">Giỏ Hàng</h4>
                <div id="paylist" class="row">
                    <div id="payimg" class="col-3"><img src="https://resources.smatestore.com/product/63871bfcf33f490d58571802/thumbnail/0/HEn2ULmgPeun71alsz.jpg" alt="" width="100%"></div>
                    <div id="payname" class="col-6">Nike Air Jordan 1 Low x Travis Scott ‘Sail and Ridgerock’ <br>45600000đ</div>
                    <div id="paypriceend" class="col-3 text-end">45600000đ</div>
                </div>
                <hr>
                <div id="paylist" class="row">
                    <div id="payimg" class="col-3"><img src="https://resources.smatestore.com/product/617a580f8b520f05ab1fbcb0/thumbnail/0/OMtqxLcEEnumJXz1Je.jpg" alt="" width="100%"></div>
                    <div id="payname" class="col-6">GUCCI RHYTON LOGO NY <br>37500000đ</div>
                    <div id="paypriceend" class="col-3 text-end">37500000đ</div>
                </div>
                <hr>
                <div id="paylist" class="row">
                    <div id="payimg" class="col-3"><img src="https://resources.smatestore.com/product/617a580f8b520f05ab1fbcb0/thumbnail/0/OMtqxLcEEnumJXz1Je.jpg" alt="" width="100%"></div>
                    <div id="payname" class="col-6">ULTRA BOOST 7.0 BLACK-WHITE <br>2500000đ x 2</div>
                    <div id="paypriceend" class="col-3 text-end">5000000đ</div>
                </div>
                <hr>
                <div id="paylist" class="row">
                    <div id="paytotal" class="col text-end">TOTAL : 88100000đ</div>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection