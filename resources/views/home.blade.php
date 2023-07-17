@extends('master')

@section('title', 'Home')

@section('content')
<main>
    <div id="main1">
        <div class="row">
            <div id="col_main1_left" class="col-8">
                <img data-aos="zoom-in-right" data-aos-duration="900" src="{{ url('image/pano1.jpg') }}">
            </div>
            <div id="col_main1_right" class="col-4">
                <img data-aos="zoom-in-left" data-aos-duration="900" src="{{ url('image/pano2.jpg') }}">
                <img data-aos="zoom-in-left" data-aos-duration="900" src="{{ url('image/pano3.jpg') }}">
            </div>
        </div>
    </div>
    <div id="main2" class="text-center">
        <div id="line"></div>
        <p id="title">CAM KẾT CỦA CHÚNG TÔI</p>
        <div id="commitmentinfo">
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro1.png') }}">
                <h5>FREESHIP</h5>
                <p>NỘI THÀNH TP.HCM và NGOẠI THÀNH với 2 đôi trở lên.</p>
            </div>
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro2.png') }}">

                <h5>CHÍNH SÁCH VẬN CHUYỂN</h5>
                <p>HỖ TRỢ GIAO HÀNG THANH TOÁN TẬN NƠI và CHO KIỂM TRA HÀNG.</p>
            </div>
            <div id="commitmentinfo_col">
                <img src="{{ url('image/camkethotro3.png') }}">

                <h5>ĐẢM BẢO CHẤT LƯỢNG</h5>
                <p>CAM KẾT HÌNH ẢNH và SẢN PHẨM CHẤT LƯỢNG TƯƠNG ĐỒNG.</p>
            </div>
        </div>
    </div>
    <!-- <div id="main4" class="text-center">
            <div id="line"></div>
            <p id="title">NEW COLLECTION</p>
            <div id="advertisessss" class="text-center">
                <img src="public/image/quangcao1.jpeg">
                <img src="public/image/quangcao2.webp">
            </div>
        </div> -->
    <div id="main3" class="text-center">
        <div id="line"></div>
        <p id="title">SẢN PHẨM NỖI BẬT</p>
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
        <a id="xemthem" href="_category.php?category_id=1">xem them</a>
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