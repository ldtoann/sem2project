@extends('master')

@section('title', @trans('font.support.index.SUPPORT.title'))

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="_home1.php">{{@trans('font.support.index.home')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">{{@trans('font.support.index.SUP')}}</li>
        </ol>
    </nav>
    <div class="accordion" id="accordionPanelsStayOpenExample" style="margin-bottom: 100px;">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <strong>{{@trans('font.support.index.wara')}}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <p><strong>1.</strong> {{@trans('font.support.index.name')}}</p>
                    <p><strong>2.</strong> {{@trans('font.support.index.name1')}}</p>
                    <p><strong>3.</strong> {{@trans('font.support.index.name2')}}</p>
                    <p><strong>4.</strong> {{@trans('font.support.index.name3')}}</p>
                    <p><strong>5</strong> The store only receives warranty from 1-2 times depending on the case of the product.</p>
                    <p><strong>*</strong> When warranty, please read the phone number purchased to check the invoice, if there is no invoice, the shop does not accept product warranty.</p>
                    <p><strong>Note:</strong> Shop receives warranty products after 13:00 every day (Please understand)</p>
                    <p><strong>PLEASE CLEAN THE PRODUCTS WHEN BRING THE WARRANTY. Thank you.</strong></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <strong>RETURN POLICY</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>1.</strong> Within 3 days from the date of purchase of the product, you are allowed to change the size - change the color of the same line (such as the white Airforce, change to another black Airforce line), cannot change another model and can only change 1 time.</p>
                    <p><strong>2.</strong>Only receive product exchange with new condition, full box of accessories, SHOP bag and correct reading of purchased phone number. Do not accept exchange when the goods are used, scratched, worn soles, smell of laundry detergent ...</p>
                    <p><strong>Note:</strong> The store has the right to refuse to exchange if the product is worn out, scratched. Wake on LAN.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>SHIPPING POLICY</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>1.FREE DELIVERY IN HCMC</strong><br> Districts 1,3,4,5,7,8,10,12 Tan Phu, Tan Binh, Phu Nhuan, Go Vap, Binh Thanh, Binh Tan (except Tan Tao), District 2 (Thao Dien, An Phu, Binh An) Free shipping and same day delivery.<br>Thu Duc, Hoc Mon (10km radius) free delivery and receive goods within the day. More than 10km to receive goods from 1-2 days. <br>District 9, Binh Chanh, Nha Be free delivery and receive goods from 1-2 days.</p>
                    <p><strong>2. SUPPORT 50K EVERY ORDER OUTSIDE HCMC & FREESHIP BUY FROM 2 pairs or more.</strong><br>Nationwide delivery, payment on receipt. <br>Time depends on the location from 2-5 working days.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button style="z-index: 0;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    <strong>payment methods</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <p><strong>Step 1:</strong><br>Visit the website and select the product you want to buy to purchase</p>
                    <p><strong>Step 2:</strong><br>Click on the product you want to buy, select the size and click BUY NOW, the product has been added to the cart.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="main3" class="text-center" style="margin-bottom: 60px;">
        <div id="line"></div>
        <p id="title">LATEST VIEW</p>
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