@extends('default.layouts.index')

@section('header')
    @include('default.site.header')
@endsection

@section('content')
    <div class="all_products">
        <div class="products-main">
            <div class="categories">
                <ul>
                    <li><a href="">Шорти</a></li>
                    <li><a href="">Футболки</a></li>
                    <li><a href="">Куртки</a></li>
                    <li><a href="">Парки</a></li>
                    <li><a href="">Світшоти</a></li>
                </ul>
            </div>
            <div class="all-products">
                <div class="product">
                    <a href=""><img src="{{ asset('default/img/products/Women-T-Shirt.png') }}" alt=""></a>
                    <p class="product-name">BRANDED TEES</p>
                    <div class="buy">
                        <p class="product-price">$300</p>
                        <a href="" class="buy-now">BUY NOW</a>
                    </div>
                </div>
                <div class="product">
                    <a href=""><img src="{{ asset('default/img/products/Women-T-Shirt.png') }}" alt=""></a>
                    <p class="product-name">BRANDED TEES</p>
                    <div class="buy">
                        <p class="product-price">$300</p>
                        <a href="" class="buy-now">BUY NOW</a>
                    </div>
                </div>
                <div class="product">
                    <a href=""><img src="{{ asset('default/img/products/Women-T-Shirt.png') }}" alt=""></a>
                    <p class="product-name">BRANDED TEES</p>
                    <div class="buy">
                        <p class="product-price">$300</p>
                        <a href="" class="buy-now">BUY NOW</a>
                    </div>
                </div>
                <div class="product">
                    <a href=""><img src="{{ asset('default/img/products/Women-T-Shirt.png') }}" alt=""></a>
                    <p class="product-name">BRANDED TEES</p>
                    <div class="buy">
                        <p class="product-price">$300</p>
                        <a href="" class="buy-now">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection