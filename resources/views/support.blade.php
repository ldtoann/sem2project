@extends('master')

@section('title', 'Support')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="_home1.php">HOME</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">SUPPORTs</li>
        </ol>
    </nav>
    <div class="accordion" id="accordionPanelsStayOpenExample" style="margin-bottom: 100px;">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <strong>CHÍNH SÁCH BẢO HÀNH</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <p><strong>1.</strong> Cửa hàng sẽ bảo hành miễn phí sản phẩm khi bị hở keo.</p>
                    <p><strong>2.</strong> Thời gian bảo hành: trong vòng 3 tháng kể từ ngày mua hàng. Cửa hàng không nhận bảo hành những đôi giày quá cũ (không còn độ bám của keo chỉ, da trầy tróc và đế bị lão hoá…)</p>
                    <p><strong>3.</strong> Sản phẩm sẽ không được nhận bảo hành khi: ra màu do giặt tẩy, da bị trầy xước, nóng, cháy hoặc do thú vật cắn, ố vàng, lem màu,… hoặc các trường hợp va quẹt hoạt động hằng ngày.</p>
                    <p><strong>4.</strong> Thời gian sửa chữa: tuỳ theo mức độ của sản phẩm dao động từ 5-7 ngày.</p>
                    <p><strong>5</strong> Cửa hàng chỉ nhận bảo hành từ 1-2 lần tuỳ theo trường hợp của sản phẩm.</p>
                    <p><strong>*</strong> Khi bảo hành vui lòng đọc số điện thoại đã mua hàng để kiểm tra hoá đơn, nếu không có hoá đơn shop không nhận bảo hành sản phẩm.</p>
                    <p><strong>Lưu ý:</strong> Shop nhận sản phẩm bảo hành sau 13h mỗi ngày (Mong quý khách thông cảm)</p>
                    <p><strong>VUI LÒNG VỆ SINH SẢN PHẨM KHI MANG ĐẾN BẢO HÀNH.
                            Xin cám ơn.</strong></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <strong>CHÍNH SÁCH ĐỔI TRẢ HÀNG</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>1.</strong> Trong vòng 3 ngày kể từ ngày mua sản phẩm, quý khách được phép đổi size - đổi màu cùng dòng (như Airforce trắng thì đổi sang dòng Airforce đen khác), không được đổi mẫu khác và chỉ được đổi 1 lần duy nhất.</p>
                    <p><strong>2.</strong> Chỉ nhận đổi sản phẩm với tình trạng còn mới, đầy đủ box phụ kiện, túi SHOP và đọc đúng SĐT đã mua hàng. Không nhận đổi hàng khi hàng đã qua sử dụng, bị trầy xước, mòn đế, có mùi tẩy giặt…</p>
                    <p><strong>Lưu ý:</strong> Cửa hàng có quyền từ chối đổi hàng nếu sản phẩm bị mòn đế, trầy xước.
                        Hàng mua rồi xin miễn trả lại.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>CHÍNH SÁCH VẬN CHUYỂN</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>1. MIỄN PHÍ GIAO HÀNG KHU VỰC TPHCM</strong><br>Quận 1,3,4,5,7,8,10,12 Tân Phú,Tân Bình,Phú Nhuận,Gò Vấp,Bình Thạnh, Bình Tân (trừ Tân Tạo), Q.2 (Thảo Điền, An Phú, Bình An) miễn phí vận chuyển và giao nhận hàng trong ngày. <br>Thủ Đức, Hóc Môn ( bán kính 10km) miễn phí giao hàng và nhận hàng trong ngày. Xa hơn 10km nhận hàng từ 1-2 ngày. <br>Quận 9, Bình Chánh, Nhà Bè miễn phí giao hàng và nhận hàng từ 1-2 ngày.</p>
                    <p><strong>2. HỖ TRỢ 50K MỖI ĐƠN HÀNG NGOÀI TPHCM & FREESHIP MUA TỪ 2 ĐÔI TRỞ LÊN.</strong><br>Giao hàng toàn quốc , thanh toán khi nhận hàng. <br>Thời gian tuỳ vào địa điểm từ 2-5 ngày làm việc.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    <strong>PHƯƠNG THỨC THANH TOÁN</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>Bước 1:</strong><br>Truy cập website và lựa chọn sản phẩm cần mua để mua hàng</p>
                    <p><strong>Bước 2:</strong><br>Click vào sản phẩm muốn mua, chọn size và bấm MUA NGAY, sản phẩm đã được đưa vào giỏ hàng.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="main3" class="text-center" style="margin-bottom: 60px;">
        <div id="line"></div>
        <p id="title">XEM GẦN ĐÂY</p>
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