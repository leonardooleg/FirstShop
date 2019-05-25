<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 15.11.2018
 * Time: 19:34
 */
?>
@extends('index', ['all_prints'=>$all_prints])
@section('content')

    <!-- breadcrumbs -->
            <div class="product-top row">
                <div class="product-breadcrumbs col-md-10 col-xs-6">
                    <a class="force-back" href="/">
                        <i class="fa fa-th-large"></i>
                        Назад в&nbsp;каталог
                    </a>
                    <ul class="product-breadcrumbs__list hidden-xs hidden-sm" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="product-breadcrumbs__list-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Главная</span>
                            </a>
                        </li>
                        @foreach($category_url as $key => $value)
                            <li class="product-breadcrumbs__list-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="/catalog/view/{{$key}}">
                                    <span itemprop="name">{{$value}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="article col-md-2 col-xs-6">
                    <span>Артикул: {{$product->id}}</span>
                </div>
            </div>
    <!-- breadcrumbs -->
    <!-- Product -->
    <section class="product" itemscope="" itemtype="http://schema.org/Product">
        <div class="">
            <div class="">
                <!-- main content -->
                <div class="product__top-block">
                    <div class="row">

                        <!-- left side -->
                        <div class="col-md-7" id="product_images">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs ">

                                    <div class="product__image-preview">
                                        <div class="swiper-container swiper-container-vertical" id="swiper-thumbnails">
                                            <div class="swiper-wrapper" style="">
                                                <div class="swiper-slide swiper-slide-active" data-image-id="" style="height: 75px; margin-bottom: 3px;">
                                                    <a href="#">
                                                        <img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_4_manshortfull_front_white_500.jpg" alt="" data-img-big="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_4_manshortfull_front_white_500.jpg" data-pos="0" onload="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker, [event, 'loaded'])}" onerror="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker,[event, 'failed'])}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" data-image-id="" style="height: 75px; margin-bottom: 3px;">
                                                    <a href="#">
                                                        <img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_2_manshortfull_back_white_500.jpg" alt="" data-img-big="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_2_manshortfull_back_white_500.jpg" data-pos="1" onload="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker, [event, 'loaded'])}" onerror="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker,[event, 'failed'])}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide" data-image-id="" style="height: 75px; margin-bottom: 3px;">
                                                    <a href="#">
                                                        <img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_front_white_500.jpg" alt="" data-img-big="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_front_white_500.jpg" data-pos="2" onload="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker, [event, 'loaded'])}" onerror="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker,[event, 'failed'])}">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide" data-image-id="" style="height: 75px; margin-bottom: 3px;">
                                                    <a href="#">
                                                        <img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_back_white_500.jpg" alt="" data-img-big="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_back_white_500.jpg" data-pos="3" onload="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker, [event, 'loaded'])}" onerror="if(window.img_tracker){window.img_tracker.track.apply(window.img_tracker,[event, 'failed'])}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-vm-button-prev swiper-button-disabled"><i class="fa fa-angle-up"></i></div>
                                            <div class="swiper-vm-button-next swiper-button-disabled"><i class="fa fa-angle-down"></i></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-9">
                                    <div class="product__image preview">
                                        <img class="img-responsive" src="data:image/gif;base64,R0lGODlh9AH0AYAAAP///wAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4zLWMwMTEgNjYuMTQ1NjYxLCAyMDEyLzAyLzA2LTE0OjU2OjI3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5Q0RCRTRBRDAzNjcxMUU1QTZFMkQwOTYwRTQ5QUZCNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5Q0RCRTRBRTAzNjcxMUU1QTZFMkQwOTYwRTQ5QUZCNiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjlDREJFNEFCMDM2NzExRTVBNkUyRDA5NjBFNDlBRkI2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjlDREJFNEFDMDM2NzExRTVBNkUyRDA5NjBFNDlBRkI2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcmJSQjIiEgHx4dHBsaGRgXFhUUExIREA8ODQwLCgkIBwYFBAMCAQAAIfkEAAAAAAAsAAAAAPQB9AEAAv+Ej6nL7Q+jnLTai7PevPsPhuJIluaJpurKtu4Lx/JM1/aN5/rO9/4PDAqHxKLxiEwql8ym8wmNSqfUqvWKzWq33K73Cw6Lx+Sy+YxOq9fstvsNj8vn9Lr9js/r9/y+/w8YKDhIWGh4iJiouMjY6PgIGSk5SVlpeYmZqbnJ2en5CRoqOkpaanqKmqq6ytrq+gobKztLW2t7i5uru8vb6/sLHCw8TFxsfIycrLzM3Oz8DB0tPU1dbX2Nna29zd3t/Q0eLj5OXm5+jp6uvs7e7v4OHy8/T19vf4+fr7/P3+//DzCgwIEECxo8iDChwoUMGzp8CDGixIkUK1q8iDGjxo3/HDt6/AgypMiRJEuaPIkypcqVLFu6fAkzpsyZNGvavIkzp86dPHv6/Ak0qNChRIsaPYo0qdKlTJs6fQo1qtSpVKtavYo1q9atXLt6/Qo2rNixZMuaPYs2rdq1bNu6fQs3rty5dOvavYs3r969fPv6/Qs4sODBhAsbPow4seLFjBs7fgw5suTJlCtbvow5s+bNnDt7/gw6tOjRpEubPo06terVrFu7fg07tuzZtGvbvo07t+7dvHv7/g08uPDhxIsbP448ufLlzJs7fw49uvTp1Ktbv449u/bt3Lt7/w4+vPjx5MubP48+vfr17Nu7fw8/vvz59Ovbv48/v/79/Pv7/f8PYIACDkhggQYeiGCCCi7IYIMOPghhhBJOSGGFFl6IYYYabshhhx5+CGKIIo5IYokmnohiiiquyGKLLr4IY4wyzkhjjTbeiGOOOu7IY48+/ghkkEIOSWSRRh6JZJJKLslkk04+CWWUUk5JZZVWXollllpuyWWXXn4JZphijklmmWaeiWaaaq7JZptuvglnnHLOSWeddt6JZ5567slnn37+CWiggg5KaKGGHopoooouymijjj4KaaSSTkpppZZeimmmmm7KaaeefgpqqKKOSmqppp6Kaqqqrspqq66+Cmusss5Ka6223oprrrruymuvvv4KbLDCDktsscbGVgAAOw==">
                                        <div class="item-image hidden-xs">
                                            <a class="zoom" href="#">
                                                <img src="{{$product->img}}" class="main-image" itemprop="image" title="Мужская футболка 3D Queen. Bohemian Rhapsody Фото 01">
                                                <i class="sprite vm-pz"></i>
                                                <i class="sprite vm-ct hidden"></i>
                                                <i class="sprite vm-kc hidden"></i>
                                            </a>
                                        </div>
                                        <div class="preview-navigation visible-xs">
                                            <div id="owl-preview" class="owl-carousel owl-theme" style="opacity: 0; display: block;">
                                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 800px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 100px;"><div class="item">
                                                                <img src="{{$product->img}}" alt="">
                                                            </div></div><div class="owl-item" style="width: 100px;"><div class="item">
                                                                <img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_2_manshortfull_back_white_500.jpg" alt="">
                                                            </div></div><div class="owl-item" style="width: 100px;"><div class="item">
                                                                <img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_front_white_500.jpg" alt="">
                                                            </div></div><div class="owl-item" style="width: 100px;"><div class="item">
                                                                <img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_back_white_500.jpg" alt="">
                                                            </div></div></div></div>



                                                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active" style="width: 619.333px;"><span class=""></span></div><div class="owl-page" style="width: 619.333px;"><span class=""></span></div><div class="owl-page" style="width: 619.333px;"><span class=""></span></div><div class="owl-page" style="width: 619.333px;"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div></div>
                                        <a class="to-favorites hidden-lg hidden-md" style="display: inline;"><span class="fa fa-heart-o"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden hidden-holder"><a class="fancyinline" rel="group" href="{{$product->img}}" data-pos="0"></a><a class="fancyinline" rel="group" href="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_2_manshortfull_back_white_700.jpg" data-pos="1"></a><a class="fancyinline" rel="group" href="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_front_white_700.jpg" data-pos="2"></a><a class="fancyinline" rel="group" href="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_manshortfull_back_white_700.jpg" data-pos="3"></a></div>

                        </div>
                        <!--/ left side -->

                        <!-- right side -->
                        <div class="col-md-5">

                            <div class="product__info">
                                <h1 class="product__info-model-name item_producttype_name">
                                    <div class="product__info-model" itemprop="model">
                                        <span> <span class="product__info-model" itemprop="model">Мужская футболка 3D</span> <span class="product__info-name" itemprop="name">«{{$product->name}}»</span></span>
                                        <a class="product-info-icon info-link" href="#" data-toggle="modal" data-target="#colors_table"></a>
                                    </div>
                                 </h1>

                                <div class="reverse-block">
                                    <div class="alert alert-warning not-available" style="display: none;"></div>
                                    <div class="product-price" id="product_price" data-autotest-id="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <div class="product-price__amount" itemprop="price" data-autotest-id="actual_price">
                                            <span>1125</span>&nbsp;<i class="fas fa-ruble-sign"></i>
                                        </div>
                                        <meta itemprop="priceCurrency" content="RUB">
                                        <link itemprop="availability" href="https://schema.org/InStock">
                                        <div class="old-price"><span class="old-price__amount">1490 <i class="fas fa-ruble-sign"></i></span><span class="old-price__label">-24%</span></div></div>
                                    <div class="product__size size hidden-xs" id="product_size">
                                        <div class="product__size-table">
                                            Размер <span class="active-size"></span> 
                                            <a class="sizes_table_link" data-toggle="modal" data-target="#sizes_table" href="#">
                                                Таблица размеров
                                            </a>
                                        </div>
                                        <ul class="product__size-list">
                                            <li data-tkey="xs_42-44" class="centered ">
                                                <span>XS (44-46)</span>
                                            </li>
                                            <li data-tkey="s_44-46" class="centered ">
                                                <span>S (48)</span>
                                            </li>
                                            <li data-tkey="m_46-48" class="centered ">
                                                <span>M (50)</span>
                                            </li>
                                            <li data-tkey="l_48-50" class="centered ">
                                                <span>L (52)</span>
                                            </li>
                                            <li data-tkey="xl_50-52" class="centered ">
                                                <span>XL (54)</span>
                                            </li>
                                            <li data-tkey="xxl_52-54" class="centered ">
                                                <span>XXL (56-58)</span>
                                            </li>
                                            <li data-tkey="xxxl_56" class="centered ">
                                                <span>XXXL (60-62)</span>
                                            </li>
                                            <li data-tkey="4xl_58" class="centered ">
                                                <span>4XL (64-66)</span>
                                            </li>
                                            <li data-tkey="5xl_60" class="centered ">
                                                <span>5XL (68-70)</span>
                                            </li>
                                            <li data-tkey="6xl_62" class="centered ">
                                                <span>6XL (72-74)</span>
                                            </li>
                                            <li data-tkey="7xl" class="centered ">
                                                <span>7XL (76-78)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__color color hidden-xs" id="product_color">
                                        <div class="product__color-name">Цвет — <span>3D печать</span></div>
                                        <ul class="product__color-list">
                                            <li class="fullprint">
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__add-to-basket">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="button" class="btn btn-vm btn-block" value="Добавить в корзину" id="add_to_button">
                                        </div>
                                        <div class="col-6">
                                            <input type="button" class="btn btn-vm btn-block" value="Купить в 1 клик" id="add_to_button2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 pay">
                                    <div class="pay_methods"><h2 class="title">Виды оплаты:</h2>
                                        <ul class="list method_list">
                                            <li><i class="fas fa-check"></i> Наличный расчет при получении</li>
                                            <li><i class="fas fa-check"></i> Безналичный расчет (НДС)</li>
                                            <li><i class="fas fa-check"></i> Оплата банковскими картами</li></ul><ul class="list cards_list clearfix"><li> <img src="https://sokol.ua/pub/static/version15427497561/frontend/Repka/sokol_theme/ru_RU/Repka_DeliveryTime/images/card_2.jpg" alt="mastercard"></li> <li> <img src="https://sokol.ua/pub/static/version15427497561/frontend/Repka/sokol_theme/ru_RU/Repka_DeliveryTime/images/card_3.jpg" alt="visa"></li></ul></div>
                                </div>
                                <div class="col-md-10 delivery">
                                    <div class="delivery_methods"><h2 class="title">Способы доставки:</h2>
                                        <ul class="list clearfix"> <li id="tablerate_4" class="justin_text">На отделение Justin: <span class="price">1&nbsp;<span>грн</span></span> Акция! <br>
                                                <span class="bold_text empty_delivery_hidden">(отправим <span class="date"> 22.11.2018</span>)</span></li>
                                            <li id="tablerate"><i class="fas fa-check"></i> Курьером: <span class="price">50&nbsp;<span>грн</span></span> <br><span class="bold_text empty_delivery_hidden">(доставим <span class="date"> 23.11.2018</span>)</span></li>
                                            <li id="tablerate_2"><i class="fas fa-check"></i> На склад Новой Почты: <span class="price">50&nbsp;<span>грн</span></span> <br><span class="bold_text empty_delivery_hidden">(отправим <span class="date"> 22.11.2018</span>)</span></li>
                                            <li id="freeshipping"><i class="fas fa-check"></i> Самовывоз из магазина: <span class="price">бесплатно</span> <br><span class="bold_text empty_delivery_hidden">(можно забрать <span class="date"> 22.11.2018</span>)</span></li></ul><p class="info">В стоимость доставки уже включена страховка и наложенный платеж</p></div>
                                </div>
                                <div class="col-md-10 hidden-xs hidden-sm">
                                    <div class="product__design-info ">
                                                                                    <span class="designer-info">Дизайнер:
                                                <span class="product-designer"><a data-href="/designer/Julia_its_me">Julia_its_me</a></span>
                                            </span>
                                        <span class="copyrights">
                                            <a href="#" data-target="#copyrights" data-toggle="modal" title="Пожаловаться на дизайн"><span>©</span> Пожаловаться на дизайн</a>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <!--/ right side -->
                        </div>
                    </div>
                </div>

                <!--/ main content -->

            </div>
        </div>

        <div class="reverse-block">
            <div>
                <div class="wrap row">
                    <div class="col-md-12 col-sm-12">
                        <div class="product-related__title">Этот товар для других лиц</div>
                    </div>
                </div>

                <div class="product__carousel-related product-carousel">

                    <div class="wrap row">
                        <div class="col-md-12">
                            <div class=" product__carousel-related-content" id="owl-product-types">
                                <div id="related-items-wrapper" class="manshortfull owl-carousel owl-theme" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 6698px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class=" active ">
                                                    <a title="Мужская футболка 3D «Queen. Bohemian Rhapsody»" href="/product/manshortfull/1645487?color=white" data-tkey="manshortfull" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_4_manshortfull_front_white_500.jpg" alt="Мужская футболка 3D"></span>
                                                        <span>Мужская футболка 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужская футболка 3D спортивная «Queen. Bohemian Rhapsody»" href="/product/man_tshirt_sport/1645487?color=black" data-tkey="man_tshirt_sport" data-color="black" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_5_man_tshirt_sport_front_black_500.jpg" alt="Мужская футболка 3D спортивная"></span>
                                                        <span>Мужская футболка 3D спортивная</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужской лонгслив 3D «Queen. Bohemian Rhapsody»" href="/product/manlongfull/1645487?color=white" data-tkey="manlongfull" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_2_manlongfull_front_white_500.jpg" alt="Мужской лонгслив 3D"></span>
                                                        <span>Мужской лонгслив 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужская майка 3D «Queen. Bohemian Rhapsody»" href="/product/man_tank_full/1645487?color=white" data-tkey="man_tank_full" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_1_man_tank_full_front_white_500.jpg" alt="Мужская майка 3D"></span>
                                                        <span>Мужская майка 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужская рубашка поло 3D «Queen. Bohemian Rhapsody»" href="/product/man_polo_shirt/1645487?color=white" data-tkey="man_polo_shirt" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_7_man_polo_shirt_front_white_500.jpg" alt="Мужская рубашка поло 3D"></span>
                                                        <span>Мужская рубашка поло 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужская толстовка 3D на молнии «Queen. Bohemian Rhapsody»" href="/product/man_hoodie_jacket/1645487?color=black" data-tkey="man_hoodie_jacket" data-color="black" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_4_man_hoodie_jacket_front_black_500.jpg" alt="Мужская толстовка 3D на молнии"></span>
                                                        <span>Мужская толстовка 3D на молнии</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужская толстовка 3D «Queen. Bohemian Rhapsody»" href="/product/manhoodiefull/1645487?color=white" data-tkey="manhoodiefull" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_6_manhoodiefull_front_white_500.jpg" alt="Мужская толстовка 3D"></span>
                                                        <span>Мужская толстовка 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужской свитшот 3D «Queen. Bohemian Rhapsody»" href="/product/mansmockfull/1645487?color=white" data-tkey="mansmockfull" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_mansmockfull_front_white_500.jpg" alt="Мужской свитшот 3D"></span>
                                                        <span>Мужской свитшот 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужская куртка 3D «Queen. Bohemian Rhapsody»" href="/product/man_jacket/1645487?color=white" data-tkey="man_jacket" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_2_man_jacket_front_white_500.jpg" alt="Мужская куртка 3D"></span>
                                                        <span>Мужская куртка 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужская ветровка 3D «Queen. Bohemian Rhapsody»" href="/product/man_windbreaker/1645487?color=white" data-tkey="man_windbreaker" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_2_man_windbreaker_front_white_500.jpg" alt="Мужская ветровка 3D"></span>
                                                        <span>Мужская ветровка 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужские трусы 3D «Queen. Bohemian Rhapsody»" href="/product/pants_fullprint/1645487?color=white" data-tkey="pants_fullprint" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_4_pants_fullprint_front_white_500.jpg" alt="Мужские трусы 3D"></span>
                                                        <span>Мужские трусы 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Мужской бомбер 3D «Queen. Bohemian Rhapsody»" href="/product/man_bomber/1645487?color=white" data-tkey="man_bomber" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_101_man_bomber_front_white_500.jpg" alt="Мужской бомбер 3D"></span>
                                                        <span>Мужской бомбер 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Шапка 3D «Queen. Bohemian Rhapsody»" href="/product/hat_fullprint/1645487?color=white" data-tkey="hat_fullprint" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_3_hat_fullprint_front_white_500.jpg" alt="Шапка 3D"></span>
                                                        <span>Шапка 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Накидка на куртку 3D «Queen. Bohemian Rhapsody»" href="/product/ski_cape/1645487?color=white" data-tkey="ski_cape" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_101_ski_cape_front_white_500.jpg" alt="Накидка на куртку 3D"></span>
                                                        <span>Накидка на куртку 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Бандана-труба 3D «Queen. Bohemian Rhapsody»" href="/product/face_shield/1645487?color=white" data-tkey="face_shield" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_101_face_shield_front_white_500.jpg" alt="Бандана-труба 3D"></span>
                                                        <span>Бандана-труба 3D</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Шапка 3D c помпоном «Queen. Bohemian Rhapsody»" href="/product/hat_pompom/1645487?color=white" data-tkey="hat_pompom" data-color="white" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_7_hat_pompom_front_white_500.jpg" alt="Шапка 3D c помпоном"></span>
                                                        <span>Шапка 3D c помпоном</span>
                                                    </a>
                                                </div></div><div class="owl-item" style="width: 197px;"><div itemprop="isSimilarTo" class="">
                                                    <a title="Фляга «Queen. Bohemian Rhapsody»" href="/product/flask/1645487?color=metal" data-tkey="flask" data-color="metal" data-id="1645487">
                                                        <span class="item-image"><img src="https://storage.vsemayki.ru/images/0/1/1645/1645487/previews/people_1_flask_front_metal_500.jpg" alt="Фляга"></span>
                                                        <span>Фляга</span>
                                                    </a>
                                                </div></div></div></div>
















                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="product-recommended">
            <div class="wrap row">
                <div class="col-md-12">
                    <div class="hidden-sm">
                        <div class="recommended-title">
                            Похожие товары
                        </div>
                        <div class="recommended-collection">
                            <div class="recommended-container owl-carousel owl-theme" id="recommended_items" style="opacity: 1; display: block;">

                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3552px; left: 0px; display: block;"><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/797161?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Группа Queen&quot;,&quot;id&quot;:&quot;797161&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1090&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/0/797/797161/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Группа Queen" alt="Группа Queen">
            </span>
                                                    <span>Группа Queen</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/741397?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Freddie Mercury&quot;,&quot;id&quot;:&quot;741397&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1090&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/0/741/741397/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Freddie Mercury" alt="Freddie Mercury">
            </span>
                                                    <span>Freddie Mercury</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/1529011?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Queen&quot;,&quot;id&quot;:&quot;1529011&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1529/1529011/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Queen" alt="Queen">
            </span>
                                                    <span>Queen</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/1423823?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Праздничный Queen&quot;,&quot;id&quot;:&quot;1423823&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1423/1423823/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Праздничный Queen" alt="Праздничный Queen">
            </span>
                                                    <span>Праздничный Queen</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/1403345?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Праздничный Queen&quot;,&quot;id&quot;:&quot;1403345&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1403/1403345/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Праздничный Queen" alt="Праздничный Queen">
            </span>
                                                    <span>Праздничный Queen</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/797152?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Queen группа&quot;,&quot;id&quot;:&quot;797152&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1090&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/0/797/797152/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Queen группа" alt="Queen группа">
            </span>
                                                    <span>Queen группа</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/1109716?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Queen&quot;,&quot;id&quot;:&quot;1109716&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1109/1109716/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Queen" alt="Queen">
            </span>
                                                    <span>Queen</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/1198930?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Hg&quot;,&quot;id&quot;:&quot;1198930&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1198/1198930/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Hg" alt="Hg">
            </span>
                                                    <span>Hg</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/1529285?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Queen&quot;,&quot;id&quot;:&quot;1529285&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1529/1529285/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Queen" alt="Queen">
            </span>
                                                    <span>Queen</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/1528981?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Носи усы&quot;,&quot;id&quot;:&quot;1528981&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1528/1528981/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Носи усы" alt="Носи усы">
            </span>
                                                    <span>Носи усы</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/797143?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Queen&quot;,&quot;id&quot;:&quot;797143&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1090&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/0/797/797143/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Queen" alt="Queen">
            </span>
                                                    <span>Queen</span>
                                                </a>
                                            </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                                <a class="product__recommended-item" href="/product/manshortfull/797146?color=white">
                                                    <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Queen&quot;,&quot;id&quot;:&quot;797146&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1090&quot;}">
                                                    <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/0/797/797146/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Queen" alt="Queen">
            </span>
                                                    <span>Queen</span>
                                                </a>
                                            </div></div></div></div>




                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="recently-viewed-block hidden">
            <div class="wrap row">
                <div class="col-md-12">
                    <div class="recommended-title">Вы недавно смотрели</div>

                    <div class="recently-viewed">
                        <div class="recommended-container" id="viewed_items" style="">
                            <div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                    <a class="product__recommended-item" href="/product/manshortfull/1423823?color=white">
                                        <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Праздничный Queen&quot;,&quot;id&quot;:&quot;1423823&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                        <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1423/1423823/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Праздничный Queen" alt="Праздничный Queen">
            </span>
                                        <span>Праздничный Queen</span>
                                    </a>
                                </div></div><div class="owl-item" style="width: 148px;"><div class="recommended-item">
                                    <a class="product__recommended-item" href="/product/manshortfull/1403345?color=white">
                                        <input type="hidden" value="{&quot;name&quot;:&quot;Мужская футболка 3D Праздничный Queen&quot;,&quot;id&quot;:&quot;1403345&quot;,&quot;category&quot;:&quot;Мужская футболка 3D&quot;,&quot;variant&quot;:&quot;manshortfull&quot;,&quot;list&quot;:&quot;Recommend_Product&quot;,&quot;price&quot;:&quot;1125&quot;}">
                                        <span class="item-image">
                <img class="img-responsive" src="https://storage.vsemayki.ru/images/0/1/1403/1403345/previews/people_4_manshortfull_front_white_500.jpg" title="Мужская футболка 3D Праздничный Queen" alt="Праздничный Queen">
            </span>
                                        <span>Праздничный Queen</span>
                                    </a>
                                </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="merits">
            <div class="wrap row">
                <div class="col-md-12">
                    <div class="merits-title">Достоинства магазина или "как просто купить" <br> Блок на доверие</div>
                    <span>Базово</span>
                    <span><p>Принты от тысяч дизайнеров</p></span>
                    <span><p>ХХХ счастливых клиентов</p></span>
                    <span><p>Только качественные и безопасные материалы</p></span>
                    <span><p>Быстрая доставка</p></span>
                    <span><p>Бесплатный обмен и возврат</p></span>
                </div>
            </div>
        </div>

        <div id="comments">
            <div class="wrap row">
                <div class="col-md-12">
                    <div class="comments-title">Уже купили</div>
                    <div class="shadow-lg p-3 mb-3 bg-white rounded" style=" text-align: left;"><img data-src="holder.js/75x75" class="rounded-circle" alt="75x75"  style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167613a5ff3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167613a5ff3%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> Какой-то крутой коммент</div>
                    <div class="shadow-lg p-3 mb-3 bg-white rounded" style=" text-align: left;"><img data-src="holder.js/75x75" class="rounded-circle" alt="75x75"  style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167613a5ff3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167613a5ff3%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> Какой-то крутой коммент</div>
                    <div class="shadow-lg p-3 mb-3 bg-white rounded" style=" text-align: left;"><img data-src="holder.js/75x75" class="rounded-circle" alt="75x75"  style="width: 75px; height: 75px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167613a5ff3%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167613a5ff3%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> Какой-то крутой коммент</div>
                    <input type="button" class="btn btn-vm btn-block" value="Смотреть больше отывов" id="">
                </div>
            </div>
        </div>
     </div>
     </div>
    </section>
    <!--/ Product -->

@endsection
