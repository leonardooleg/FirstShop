<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 15.11.2018
 * Time: 19:34
 */
?>
@extends('layouts\app')
@section('title', 'Корзина')
@section('meta_keyword', 'Корзина')
@section('meta_description', 'Корзина')
@section('content')


    <div class="body">

                 <!---->

                <!-- breadcrumbs -->
            <div class="cart-block row">
                <div class="product-breadcrumbs col-md-12 col-xs-12 ">
                    <div class="breadcrumb-row">
                        Оформление заказа  <a class="link-back" href="/"> <button type="button" class="btn btn-back">Вернуться назад <img src="/icon/arrow_back.png"> </button></a>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs -->
                <!-- breadcrumbs -->
                <!-- Product -->
        <div class="row cart-block">
            <section class="card-product product__top-block col-md-12" itemscope="" itemtype="http://schema.org/Offer">
                <div class="CartItem row" data-autotest="CartItem"  v-for="item in items">
                    <div class="col-md-3 card-product-img">
                        <img class="img_cart" v-bind:src="/storage/ + item.attributes.img" alt="preview">
                        <div class="card-product-img-line">
                            <img src="/icon/hit.png" class="hit">
                            <img src="/icon/new.png" class="new">
                            <img src="/icon/percent.png" class="percent">
                        </div>
                    </div>
                    <div class="col-md-3 product_cart">
                        <div class="">Артикул: @{{ item.id }}</div>
                        <div class="product_type_cart">Мужская футболка хлопок</div>
                        <a class="product_name_cart" v-bind:href="/product-cart/ + item.id">@{{ item.name }}</a>
                    </div>
                    <div class="col-md-3">
                        <div class="product_attribute_cart">Размер <img src="/icon/arrow_down.png"> </div>
                        <div class="alert alert-light product_attribute_block_cart" role="alert">
                            @{{ item.attributes.size }}
                        </div>
                        <div class="product_attribute_cart">Цвет <img src="/icon/arrow_down.png"></div>
                        <div class="alert alert-light color-table product_attribute_block_cart" role="alert">
                            <li class="form-check"><input><label  v-bind:style="{ 'background-color': '#' +item.attributes.color }"></label></li>
                        </div>
                        <div class="product_attribute_cart" style="text-align: end;">Количество:
                            <div class="qty">
                                <span class="minus" v-on:click="updateItem(item.cart_id, 1)">-</span>
                                <input type="number" class="count" v-model="item.quantity"  name="qty"  >
                                <span class="plus" v-on:click="updateItem(item.cart_id, 2)">+</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 " style="display: flex;">
                        <img class="red-x" src="/icon/red_X.png" v-on:click="removeItem(item.cart_id)" >
                        <div class="total-block"> <div class="total-col count">х<input type="number" class="count"  name="qty" style="width: 30px"  :value="item.quantity" readonly></div>
                        <div class="total-price">@{{  item.quantity * item.price}} руб.</div></div>
                    </div>


                </div>

                <div class="row cart-bottom">
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="promo-block">
                            <div class="promo-text">Промокод</div>
                            <form class="promo-form">
                                <input type="text" name="promo" value="">
                                <button type="fill" class="btn btn-white btn-md">Применить</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-5">
                       <span class="total-price-cart">Итоговая стоимость: <b>@{{ details.total.toFixed(2) + ' руб.' }}  </b></span><br>
                        <span class="total-info-cart">Без учета доставки</span><br>
                        <button type="fill" class="cart-steep-1 btn btn-white btn-md">Оформить заказ</button>


                    </div>


                    </div>
            </section>
                <!--/ Product -->

                 <!---->

            </div>
            </div>


    @include('layouts.footer')

@endsection
