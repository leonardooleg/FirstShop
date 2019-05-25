<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 16.11.2018
 * Time: 23:57
 */
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Магазин</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/shop.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div  class="container">
    <header>
        <div id="one_head" class="row">
            <div class="all-count col-md-6">{{$all_prints}} принтов в базе</div>
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
                <a href="#"><img width="200px" src="/img/svoy_design.png"></a>
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
        @yield('content')
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
