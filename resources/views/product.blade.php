@extends('master')

@section('title', 'PRODUCT ITEM')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">HOME</a></li>
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
                            <img class="d-block w-100" id="imageproductdetail" src="{{ url('image/nike/itemnike1.1.jpg') }}">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" id="imageproductdetail" src="{{ url('image/nike/itemnike1.jpg') }}">
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
                <form action="{{ route('cart.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="productId" value="{{ $product->id }}">
                    <div id="name">
                        <p>{{ $product->name }}</p>
                    </div>
                    <div id="rates">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div id="pricess">
                        <p id="saleprice"><strong>Price</strong> : {{ $product->price }}đ</p>
                        <p id="pricesss">999.999.999đ</p>
                    </div>
                    <div id="size">
                        <p id="saleprice"><strong>Choose Size </strong> : <strong class="selected-size" style="color: rgb(145, 7, 7);"></strong></p>
                        <input type="radio" name="size" value="36" id="size-36">
                        <label for="size-36">36</label>
                        <input type="radio" name="size" value="37" id="size-37">
                        <label for="size-37">37</label>
                        <input type="radio" name="size" value="38" id="size-38">
                        <label for="size-38">38</label>
                        <input type="radio" name="size" value="39" id="size-39">
                        <label for="size-39">39</label>
                        <input type="radio" name="size" value="40" id="size-40">
                        <label for="size-40">40</label>
                        <input type="radio" name="size" value="41" id="size-41">
                        <label for="size-41">41</label>
                        <input type="radio" name="size" value="42" id="size-42">
                        <label for="size-42">42</label>
                        <input type="radio" name="size" value="43" id="size-43">
                        <label for="size-43">43</label>
                        <input type="radio" name="size" value="44" id="size-44">
                        <label for="size-44">44</label>
                    </div>
                    <div id="quantity">
                        <p id="saleprice"><strong>Quantity</strong> :</p>
                        <div class="quantity">
                            <div class="quantity-btn" data-action="decrease">-</div>
                            <input name="quantity" type="number" class="quantity-input" value="1" min="1">
                            <div class="quantity-btn" data-action="increase">+</div>
                        </div>
                    </div>
                    <p id="descc"><strong>Describe</strong> : {{ $product->desc }}</p>
                    <button type="submit" class="btn" id="liveToastBtn">ADD TO CART</button>
                </form>
            </div>
        </div>
        <script>
            const radioButtons = document.querySelectorAll('input[type="radio"]');
            const selectedSizeElement = document.querySelector('.selected-size');

            radioButtons.forEach(radioButton => {
                radioButton.addEventListener('change', function() {
                    if (this.checked) {
                        selectedSizeElement.textContent = "" + this.value;
                    }
                });
            });
            document.addEventListener('DOMContentLoaded', function() {
                const quantityInput = document.querySelector('.quantity-input');
                const decreaseBtn = document.querySelector('[data-action="decrease"]');
                const increaseBtn = document.querySelector('[data-action="increase"]');

                decreaseBtn.addEventListener('click', function() {
                    updateQuantity(-1);
                });

                increaseBtn.addEventListener('click', function() {
                    updateQuantity(1);
                });

                function updateQuantity(change) {
                    let currentQuantity = parseInt(quantityInput.value);
                    if (currentQuantity + change > 0) {
                        quantityInput.value = currentQuantity + change;
                    }
                }
            });
        </script>
    </div>
</main>

@endsection