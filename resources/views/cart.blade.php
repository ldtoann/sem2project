@extends('master')

@section('title', 'Cart')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">HOME</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">CARTs</li>
        </ol>
    </nav>
    <p id="titlecart"><i class="fa-solid fa-cart-shopping"></i> CART LIST</p>
    <div class="row">
        <div class="col-8">
            <!-- <form action="" method="post"> -->
            <div id="maincart">
                <div id="rowinfonamecart" class="row">
                    <div id="infonamecart" class="col-2">PRODUCT</div>
                    <div id="infonamecart" class="col-4"></div>
                    <div id="infonamecart" class="col text-center">PRICE</div>
                    <div id="infonamecart" class="col text-center">QUANTITY</div>
                    <div id="infonamecart" class="col text-center">TOTAL</div>
                    <div id="infonamecart" class="col-1 text-end">DELETE</div>
                </div>
                <hr>
                @foreach ($cart as $order)
                <div id="cartlist" class="row">
                    <div id="cartimgproduct" class="col-2"><img src="https://resources.smatestore.com/product/63871bfcf33f490d58571802/thumbnail/0/HEn2ULmgPeun71alsz.jpg" alt=""></div>
                    <div id="infoname" class="col-4"><a href="">{{ $order['name'] }}</a>
                        <br>size : 42
                    </div>
                    <div id="infoprice" class="col text-center">{{ $order['price'] }} đ</div>
                    <div id="cartquantity" class="col text-center">
                        <form action="{{ route('cart.update' ,$order['productId']) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="quantity">
                                <input id="quantitycarttt" onchange="this.form.submit()" name="quantity" type="number" min="1" step="1" class="quantity-input" value="{{ $order['quantity'] }}">
                            </div>
                        </form>
                    </div>
                    <div id="infototal" class="col text-center">{{ $order['quantity'] * $order['price'] }} đ</div>
                    <div id="infonamecart" class="col-1 text-end">
                        <form action="{{ route('cart.delete', $order['productId']) }}" class="col-1 text-end" method="post">
                            @csrf
                            @method('delete')
                            <button id="deletecart" type="submit" class="fa fa-remove"></button>
                        </form>
                    </div>
                </div>
                <hr>
                @endforeach
                <div id="totalcarts" class="row">
                    <div id="total" class="col">
                        <p> -- <strong>TOTAL CART</strong> : 100000000 đ</p>
                    </div>
                    <div id="totalpay" class="col text-end">
                        <button type="submit">Pay</button>
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>
        <div id="cartpanel" class="col-4">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano1.jpg') }}">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano2.jpg') }}">
            <img class="shadow-lg" id="panelcart" src="{{ url('image/pano3.jpg') }}">
        </div>
    </div>
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