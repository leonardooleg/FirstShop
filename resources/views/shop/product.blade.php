<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 15.11.2018
 * Time: 19:34
 */
?>
@extends('layouts\app', ['all_prints'=>$all_prints])
@section('title', $product->meta_title)
@section('meta_keyword', $product->meta_keyword)
@section('meta_description', $product->meta_description)
@section('content')


<div class="body">
    <div class="product-top row">
        <div class="product-breadcrumbs col-md-12 col-xs-12 ">
            <div class="breadcrumb-row">
                <img src="/icon/home.png" class="home-icon"> {{ Breadcrumbs::render('category', $category) }}
            </div>
        </div>
    </div>
    <!-- breadcrumbs -->
    <!-- Product -->
    <div class=" row">
        <section class="product" itemscope="" itemtype="http://schema.org/Product">
                    <!-- main content -->
            <div class="product__top-block">
                <div class="row">

                    <!-- left side -->
                    <div class="col-md-7" id="product_images">
                        <div class="row">
                            <div class="col-md-3 hidden-xs ">
                                <div class="product__image-preview">
                                    <div class="swiper-slide" style="">
                                        <img src="{{asset('/storage/'. $product->image ?? '') }}" itemprop="img" alt="" data-img-big="{{asset('/storage/'. $product->image ?? '') }}" >
                                        @if (isset($next_images))
                                            @foreach($next_images as $next_image)
                                                <img src="{{asset('/storage/'. $next_image ?? '') }}" alt="" data-img-big="{{asset('/storage/'. $next_image ?? '') }}" >
                                            @endforeach
                                        @endif
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <a class="zoom" href="#">
                                    <img src="{{asset('/storage/'. $product->image) }}" class="main-image" itemprop="image" title="Мужская футболка 3D Queen. Bohemian Rhapsody Фото 01">
                                </a>
                                <a class="to-favorites" style="display: inline;"> <img class="favorites" src="/icon/favorites.png"></a>
                                <p class="footer-image">Имя дизайнера. Дата публикации. Пожаловаться на дизайн</p>
                            </div>
                        </div>
                    </div>
                    <!--/ left side -->

                    <!-- right side -->
                    <div  class="col-md-5" id="app">

                        <div class="row product__info">
                            <div class="col-md-6 card-product-img-line">
                                <img class="hit" src="/icon/hit.png">
                                <img class="new" src="/icon/new.png">
                                <img class="percent" src="/icon/percent.png">
                            </div>
                            <div class="col-md-6 social">
                                <div class="product-social-text">Поделиться в соц. сетях</div>
                                <a href="#"><img src="/icon/vk.png"> </a> <a href="#"><img src="/icon/ok.png"> </a> <a href="#"> <img src="/icon/facebook.png"> </a> <a href="#"> <img src="/icon/insta.png"> </a>
                            </div>

                            <div class="product-info-model-name">
                                <p>Артикул: {{$product->id}}</p>
                                <span class="product__info-model" itemprop="model">Мужская футболка 3D</span>
                                <h1 class="product__info-name" itemprop="name">{{$product->title}}</h1>
                                <div class="product-price" id="product_price" data-autotest-id="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <meta itemprop="priceCurrency" content="RUB">
                                    <link itemprop="availability" href="https://schema.org/InStock">
                                        <span class="product__info-price" itemprop="price">{{$product->price}} р.</span>
                                </div>





                                <div class="size_row">
                                    <div class="size-name">Размер</div>
                                    <div class="size-name_table">Таблица размеров</div>
                                </div>
                                <div class="size-table ">
                                    <li class="form-check active" ><input type="radio" value="XXS (42)" v-model="item.attributes.size" name="size" id="size1" checked><label class="form-check-label" for="size1">XXS (42)</label></li>
                                    <li class="form-check"><input type="radio" value="XS (46)" v-model="item.attributes.size" name="size" id="size2"><label class="form-check-label" for="size2">XS (46)</label></li>
                                    <li class="form-check" ><input type="radio" value="S (48)" v-model="item.attributes.size" name="size" id="size3"><label class="form-check-label" for="size3">S (48)</label></li>
                                    <li class="form-check" ><input type="radio" value="M (50)" v-model="item.attributes.size" name="size" id="size4"><label class="form-check-label" for="size4">M (50)</label></li>
                                    <li class="form-check" ><input type="radio" value="L (52)" v-model="item.attributes.size" name="size" id="size5"><label class="form-check-label" for="size5">L (52)</label></li>
                                    <li class="form-check" ><input type="radio" value="XL (54)" v-model="item.attributes.size" name="size" id="size6"><label class="form-check-label" for="size6">XL (54)</label></li>
                                    <li class="form-check" ><input type="radio" value="XXL (56-58)" v-model="item.attributes.size" name="size" id="size7"><label class="form-check-label" for="size7">XXL (56-58)</label></li>
                                    <li class="form-check" ><input type="radio" value="XXXL (60-62)" v-model="item.attributes.size" name="size" id="size8"><label class="form-check-label" for="size8">XXXL (60-62)</label></li>
                                    <li class="form-check" ><input type="radio" value="4XL (64-66)" v-model="item.attributes.size" name="size" id="size9"><label class="form-check-label" for="size9">4XL (64-66)</label></li>
                                    <li class="form-check" ><input type="radio" value="5XL (68-70)" v-model="item.attributes.size" name="size" id="size10"><label class="form-check-label" for="size10">5XL (68-70)</label></li>
                                    <li class="form-check" ><input type="radio" value="6XL (72-74)" v-model="item.attributes.size" name="size" id="size11"><label class="form-check-label" for="size11">6XL (72-74)</label></li>
                                    <li class="form-check" ><input type="radio" value="7XL (76-78)" v-model="item.attributes.size" name="size" id="size12"><label class="form-check-label" for="size12">7XL (76-78)</label></li>
                                </div>

                                <div class="color_row">
                                        <div class="color-name">Цвет — белый</div>
                                        <div class="color-table">
                                            <li class="form-check active"><input type="radio" value="FFFFFF" v-model="item.attributes.color" name="color" id="color1" class="color-table_color" checked ><label style="background:#FFFFFF" for="color1" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="272729" v-model="item.attributes.color" name="color" id="color2" class="color-table_color" ><label  style="background:#272729"for="color2" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="C71F2D" v-model="item.attributes.color" name="color" id="color3" class="color-table_color" ><label style="background:#C71F2D" for="color3"  class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="FAE03C" v-model="item.attributes.color" name="color" id="color4" class="color-table_color" ><label style="background:#FAE03C"  for="color4" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="1F5DA0" v-model="item.attributes.color" name="color" id="color5" class="color-table_color"><label  style="background:#1F5DA0" for="color5"  class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="F96714" v-model="item.attributes.color" name="color" id="color6" class="color-table_color" ><label style="background:#F96714" for="color6" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="00A28A" v-model="item.attributes.color" name="color" id="color7" class="color-table_color" ><label style="background:#00A28A" for="color7" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="58C9D4" v-model="item.attributes.color" name="color" id="color8" class="color-table_color"><label style="background:#58C9D4"  for="color8" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="233658" v-model="item.attributes.color" name="color" id="color9" class="color-table_color"><label  style="background:#233658" for="color9" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="E5CCAF" v-model="item.attributes.color" name="color" id="color10" class="color-table_color" ><label style="background:#E5CCAF" for="color10"  class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="e1e1e1" v-model="item.attributes.color" name="color" id="color11" class="color-table_color"><label  style="background:#e1e1e1" for="color11" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="F56C73" v-model="item.attributes.color" name="color" id="color12" class="color-table_color" ><label style="background:#F56C73" for="color12" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="ACDFDD" v-model="item.attributes.color" name="color" id="color13" class="color-table_color"><label  style="background:#ACDFDD" for="color13" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="EFC1D6" v-model="item.attributes.color" name="color" id="color14" class="color-table_color"><label  style="background:#EFC1D6" for="color14" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="5B5A41" v-model="item.attributes.color" name="color" id="color15" class="color-table_color"><label  style="background:#5B5A41" for="color15" class="color-table_color_span"></label></li>
                                            <li class="form-check"><input  type="radio" value="EB3C27" v-model="item.attributes.color" name="color" id="color16" class="color-table_color" ><label style="background:#EB3C27" for="color16" class="color-table_color_span"></label></li>
                                        </div>
                                </div>
                            </div>

                                <div class="button-row row">
                                    <button type="button" v-on:click="addItem()" class="btn btn-warning button-add btn-lg">В корзину <img src="/icon/cart-w.png"><img class="cart-animate" src="/icon/cart.png"></button>
                                    <button type="button" class="btn btn-warning button-add-fast btn-lg"><div class="turbo-text">Турбо покупка<br><span>(купить в один клик)</span></div><img src="/icon/turbo.png"> </button>
                                </div>

                                <div class="info-by-text">
                                    <a href="#">Информация по оплате. Выбор способа оплаты.</a>
                                    <a href="#" class="info-by-text_a twoo">Информация по доставке. </a>
                                    <a href="#" class="info-by-text_a tree">Обычно на следующий день после заказа</a>
                                </div>
                        </div>
                    </div>

                        <div style="display: none">
                            <div class="col-md-10 pay">
                                <div class="pay_methods"><h2 class="title">Виды оплаты:</h2>
                                    <ul class="list method_list">
                                        <li><i class="fas fa-check"></i> Наличный расчет при получении</li>
                                        <li><i class="fas fa-check"></i> Безналичный расчет (НДС)</li>
                                        <li><i class="fas fa-check"></i> Оплата банковскими картами</li></ul><ul class="list cards_list clearfix"><li> <img src="https://sokol.ua/pub/static/version1566076493/frontend/Project/sokol_theme/ru_RU/Project_DeliveryTime/images/card_2.jpg" alt="mastercard"></li> <li> <img src="https://sokol.ua/pub/static/version1566076493/frontend/Project/sokol_theme/ru_RU/Project_DeliveryTime/images/card_3.jpg" alt="visa"></li></ul></div>
                            </div>
                            <div class="col-md-10 delivery">
                                <div class="delivery_methods"><h2 class="title">Способы доставки:</h2>
                                    <ul class="list clearfix"> <li id="tablerate_4" class="justin_text">На отделение Justin: <span class="price">1&nbsp;<span>грн</span></span> Акция! <br>
                                            <span class="bold_text empty_delivery_hidden">(отправим <span class="date"> 22.11.2018</span>)</span></li>
                                        <li id="tablerate"><i class="fas fa-check"></i> Курьером: <span class="price">50&nbsp;<span>грн</span></span> <br><span class="bold_text empty_delivery_hidden">(доставим <span class="date"> 23.11.2018</span>)</span></li>
                                        <li id="tablerate_2"><i class="fas fa-check"></i> На склад Новой Почты: <span class="price">50&nbsp;<span>грн</span></span> <br><span class="bold_text empty_delivery_hidden">(отправим <span class="date"> 22.11.2018</span>)</span></li>
                                        <li id="freeshipping"><i class="fas fa-check"></i> Самовывоз из магазина: <span class="price">бесплатно</span> <br><span class="bold_text empty_delivery_hidden">(можно забрать <span class="date"> 22.11.2018</span>)</span></li></ul><p class="info">В стоимость доставки уже включена страховка и наложенный платеж</p></div>
                            </div>
                        </div>

                        </div>
                        <!--/ right side -->
                    </div>

    <div class="product__top-block">
        <div class="row">
               <h5 class="text-center mx-auto"> Этот товар для других лиц</h5>
               <div id="carouselExample" class="carousel slide col-md-12" data-ride="carousel" data-interval="9000">
                   <div class="carousel-inner row w-88 mx-auto" role="listbox">
                       <div class="carousel-item col-md-2 active">
                           <img class="img-fluid mx-auto d-block" src="/img/addpeople/1.jpg" alt="slide 1">
                       </div>
                       <div class="carousel-item col-md-2">
                           <img class="img-fluid mx-auto d-block" src="/img/addpeople/2.jpg" alt="slide 2">
                       </div>
                       <div class="carousel-item col-md-2">
                           <img class="img-fluid mx-auto d-block" src="/img/addpeople/3.jpg" alt="slide 3">
                       </div>
                       <div class="carousel-item col-md-2">
                           <img class="img-fluid mx-auto d-block" src="/img/addpeople/4.jpg" alt="slide 4">
                       </div>
                       <div class="carousel-item col-md-2">
                           <img class="img-fluid mx-auto d-block" src="/img/addpeople/5.jpg" alt="slide 5">
                       </div>
                       <div class="carousel-item col-md-2">
                           <img class="img-fluid mx-auto d-block" src="/img/addpeople/2.jpg" alt="slide 6">
                       </div>
                       <div class="carousel-item col-md-2">
                           <img class="img-fluid mx-auto d-block" src="/img/addpeople/3.jpg" alt="slide 7">
                       </div>
                       <!--Минимум 7-->

                   </div>
                   <img src="/img/welcome_slider_sloy.png" class="welcome-slider-sloy">
                   <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                       <img src="/icon/arrow_left_slider.png" class="fa fa-chevron-left fa-lg text-muted">
                       <span class="sr-only">Previous</span>
                   </a>
                   <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                       <img src="/icon/arrow_right_slider.png" class="fa fa-chevron-right fa-lg text-muted">
                       <span class="sr-only">Next</span>
                   </a>
               </div>
        </div>
            </div>

            <div class="product__top-block">
                <div class="row">
                   {{-- @foreach($products as $product)
                        @include('shop.cardProduct', $product )
                    @endforeach--}}
                </div>
            </div>

            <div class="product__top-block">
                <div class="row">
                   {{-- @foreach($products as $product)
                        @include('shop.cardProduct', $product )
                    @endforeach--}}
                </div>
            </div>
                    <!--/ main content -->






        </section>
        <!--/ Product -->

         <!---->

    </div>
</div>


    @include('layouts.footer')

@endsection
