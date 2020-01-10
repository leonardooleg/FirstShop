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
                                <div class="size-table sizetable">

                                    @foreach ($textiles_size as $textile_size)
                                        <li class="form-check " ><input type="radio" value="{{$textile_size->textiles_size}}"  v-model="item.attributes.size" name="size" id="size{{$textile_size->textiles_size}}" ><label class="form-check-label" id ="lSize{{$textile_size->textiles_size}}" for="size{{$textile_size->textiles_size}}">{{$textile_size->size_world}} ({{$textile_size->size_rus}})</label></li>
                                    @endforeach
                                </div>

                                <div class="color_row">
                                        <div class="color-name">Цвет — белый</div>
                                        <div class="color-table">
                                            @foreach ($textiles_color as $textile_color)
                                                <li class="form-check formcheck  "><input type="radio"  value="{{$textile_color->id_color}}" v-model="item.attributes.color" name="color" id="color{{$textile_color->id_color}}" class="color-table_color" ><label style="background:#{{$textile_color->color_code}}" title="{{$textile_color->color}}" for="color{{$textile_color->id_color}}" class="color-table_color_span"></label></li>
                                            @endforeach
                                        </div>
                                </div>
                                <input type="hidden" id="checked_textiles" value="{{$array_textile->id}}"  v-model="item.checked_textiles" name="checked_textiles" >
                            </div>
                            <script type="application/javascript">
                                var textiles =@php
                                    echo json_encode($textiles);
                                @endphp;


                                //console.log('ok-textiles');
                            </script>

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
