<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Магазин')</title>
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css">
</head>
<body>
<div  class="container">
    <header>
        <div id="one_head" class="row">

                <div class="all-count col-md-6 ">@if (isset($all_prints)){{$all_prints }} принтов в базе@endif</div>


            <div class="zamanuha col-md-6">Иван С. из Москвы только-что заказал футболку Панда</div>
        </div>
        <div id="twoo_head" class="row">
            <div class="col-md-2"><a href="/"> <img src="/img/Logo.Jpg"> </a></div>
            <div class="col-md-2">Интернет магазин принтов</div>
            <div class="col-md-2">+7 (495) 663-73-73<br>add@shop.com<br>logineskype</div>
            <div class="col-md-6">
                <div class="col-12">
                    <a href="#">Где мой заказ</a>
                    <a href="#">Оплата и доставка</a>
                    <a href="{{route('admin.index')}}">Личный кабинет</a>
                </div>
                <div class="row">
                    <div class="col-6">Избранное</div>
                    <div class="col-6">Корзина</div>
                </div>
            </div>
        </div>
        <div id="tree_head" class="row">
            <div class="col-3">
                <a href="/constructor"><img width="200px" src="/img/svoy_design.png"></a>
            </div>
            <div class="col-6">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" style="width: 80%" placeholder="Поиск" aria-label="Поиск">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
                </form>
            </div>
            <div class="col-3">
                <a href="#"><img width="200px" src="/img/baner.jpg"></a>
            </div>
        </div>
    </header>
    <content>

        <div class="body row">
            <div class="col-md-2 col-sm-12">

                @include('layouts.leftMenu')

            </div>
            <div class="col-md-10 col-sm-12">

                @yield('content')

            </div>
        </div>
    </content>
    <footer class="bottom-footer container">
        <div class="row">
            <div class="col-6 social">
                <i class="fab fa-2x fa-vk"></i> <i class="fab  fa-2x fa-facebook-square"></i><i class="fab  fa-2x fa-instagram"></i><i class="fab  fa-2x fa-odnoklassniki-square"></i>
            </div>
            <div class="col-6">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" style="width: 80%" placeholder="Поиск" aria-label="Поиск">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
                </form>
            </div>
        </div>
        <div class="span"></div>
        <div class="span"></div>
        <div class="row">

            <div class="col-2"> <br><img src="/img/Logo.Jpg"></div>
            <div class="col-sm-2 hidden-xs"><br><div class="footer-menu__title"><span>Помощь</span></div><ul><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/kak_sdelat_zakaz">Как сделать заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/deliverytype">Доставка</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/brak">Обмен и возврат</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/status">Где мой заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/paymentoperation">Способы оплаты</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="#" data-toggle="modal" data-target="#trouble">Сообщить о проблеме</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/user_agreement">Пользовательское соглашение</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/promotions">Акции и скидки</a></li></ul></div>
            <div class="col-sm-2 hidden-xs"><br><div class="footer-menu__title"><span>О компании</span></div><ul><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/kak_sdelat_zakaz">Как сделать заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/deliverytype">Доставка</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/brak">Обмен и возврат</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/status">Где мой заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/paymentoperation">Способы оплаты</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="#" data-toggle="modal" data-target="#trouble">Сообщить о проблеме</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/user_agreement">Пользовательское соглашение</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/promotions">Акции и скидки</a></li></ul></div>
            <div class="col-sm-2 hidden-xs"><br><div class="footer-menu__title"><span>Сотрудничество</span></div><ul><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/kak_sdelat_zakaz">Как сделать заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/deliverytype">Доставка</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/brak">Обмен и возврат</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/status">Где мой заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/paymentoperation">Способы оплаты</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="#" data-toggle="modal" data-target="#trouble">Сообщить о проблеме</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/user_agreement">Пользовательское соглашение</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/promotions">Акции и скидки</a></li></ul></div>
            <div class="col-sm-2 hidden-xs"><br><div class="footer-menu__title"><span>Контаты</span></div><ul><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/kak_sdelat_zakaz">Как сделать заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/deliverytype">Доставка</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/information/brak">Обмен и возврат</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/status">Где мой заказ?</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/paymentoperation">Способы оплаты</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="#" data-toggle="modal" data-target="#trouble">Сообщить о проблеме</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/doc/user_agreement">Пользовательское соглашение</a></li><li class="footer-menu__item"><a class="footer-menu__link" href="/promotions">Акции и скидки</a></li></ul></div>


        </div>
    </footer>
</div>
<script type="text/javascript" src="/construct/dist/main.js"></script>
</body>
</html>
