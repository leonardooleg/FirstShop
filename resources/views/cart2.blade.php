<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 15.11.2018
 * Time: 19:34
 */
?>
@extends('layouts\app')
@section('title', 'Оформление заказа')
@section('meta_keyword', 'Оформление заказа')
@section('meta_description', 'Оформление заказа')
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
        <form class="" action="{{route('cart2.add')}}" method="post">
            <section class="col-md-12" itemscope="" itemtype="http://schema.org/Offer">
        <div class="row cart2-block cart-2-fon-minus">
            <div class="col-md-12">

                    @csrf
                    <div class="row">
                        <div class="col-md-7 data_trek">
                            <div class="fon-cart-2">
                                <h3>Данные доставки</h3>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-4 col-form-label">Ваше имя и фамилия</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="clientName" placeholder="Иванов Иван Иванович" class="form-control my-bg-grey" id="inputName" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputTel" class="col-sm-4 col-form-label">Телефон</label>
                                    <div class="col-sm-8">
                                        <input type="tel" name="clientTel" placeholder="+7 (999) 123-45-67" class="form-control my-bg-grey" id="inputTel" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-4 col-form-label">E-mail</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="clientEmail" class="form-control my-bg-grey" placeholder="ivanov.ivan@ivanovivan.ru" id="inputEmail" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputCountry" class="col-sm-4 col-form-label">Страна</label>
                                    <div class="col-sm-8">
                                        <select name="clientCountry" class="form-control my-bg-grey" id="inputCountry" required>
                                            <option>Выбор стран:</option>
                                            <option  value="RUS">Россия</option>
                                            <option  value="BLR">Беларусь</option>
                                            <option  value="UA">Украина</option>
                                            <option  value="KAZ">Казахстан</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputCity" class="col-sm-4 col-form-label">Город</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="clientCity" class="form-control my-bg-grey" placeholder="Екатиренбург" id="inputCity" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputAddress" class="col-sm-4 col-form-label">Адрес</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="clientAddress" class="form-control my-bg-grey" placeholder="Проспект Иванова, 1" id="inputAddress" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputComment" class="col-sm-4 col-form-label ">Комментарий к заказу</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control my-bg-grey" name="clientComment" placeholder="Текст комментария" id="inputComment" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>


                                    <div class="fon-cart-2 fon-cart-2-top">
                                        <h3>Данные доставки</h3>
                                        <div class="row p-3 mb-2 my-bg-grey unset-row">
                                            <div class="col-md-8">Курьерская доставка  по г. Екатеринбург</div>
                                            <div class="col-md-2">Завтра</div>
                                            <div class="col-md-2">200 руб.</div>
                                        </div>
                                        <div class="row p-3 mb-2 my-bg-grey unset-row">
                                            <div class="col-md-8">Самовывоз Адрес самовывоза</div>
                                            <div class="col-md-2">Завтра</div>
                                            <div class="col-md-2">Бесплатно</div>
                                        </div>
                                        <div class="row p-3 mb-2 my-bg-grey unset-row">
                                            <div class="col-md-8">Почта России</div>
                                            <div class="col-md-2">3 - 5 дней</div>
                                            <div class="col-md-2">249 руб.</div>
                                        </div>
                                    </div>

                            <div class="fon-cart-2 fon-cart-2-top">
                                <h3>Способы оплаты</h3>
                                <label>
                                    <input type="radio" name="type_pay" class="type_pay" value="nal" checked>
                                    <img src="/img/nal_pay.png">
                                </label>

                                <label>
                                    <input type="radio" name="type_pay" class="type_pay" value="cart">
                                    <img src="/img/bank_pay.png">
                                </label>
                            </div>


                        </div>
                        <div class="col-md-5 cart_items_blok">
                            <div class="fon-cart-2">
                            <h3>Ваш заказ</h3>
                            <div class="CartItem row" data-autotest="CartItem"  v-for="item in items">
                                <div class="col-md-4">
                                    <img class="img_cart" v-bind:src="/storage/ + item.attributes.img" alt="preview">
                                </div>
                                <div class="col-md-4">
                                    <div class="">Артикул: @{{ item.attributes.id }}</div>
                                    <input type="hidden"  :value="item.attributes.id">
                                    <div class="">Мужская футболка хлопок</div>
                                    <div  class=""> <input type="hidden"  :value="item.name"> @{{ item.name }}</div>
                                    <div  class=""> <input type="hidden"  :value="item.size">Размер:  @{{ item.attributes.size_world }} (@{{ item.attributes.size_rus }})</div>
                                    <div  class=""> <input type="hidden"  :value="item.color">Цвет: @{{ item.attributes.color_name }}</div>
                                    <div  class=""> <input type="hidden"  :value="item.quantity">Кол-во: @{{ item.quantity }}</div>

                                </div>
                                <div class="col-md-4  d-flex align-items-center" style="">
                                        <div class=" ">@{{  item.quantity * item.price}} руб.</div>
                                </div>

                            </div>

                                <hr />
                            <div class="row ">

                                <div class="col-md-3">
                                    <div class="">Промо-код</div>
                                </div>
                                <div class="col-md-3">
                                    <form class="promo-form">
                                        <div class="font-weight-bold">promo20</div>
                                        <input type="hidden" name="promo" value="">
                                    </form>
                                </div>
                                <div class="col-md-6 ">
                                        <span class="">Общая стоимость: @{{ details.sub_total.toFixed(2)  + ' руб.'}}</span><br>
                                        <span class="">Итоговая стоимость <b>@{{details.total.toFixed(2)  + ' руб.'}}</b></span>
                                    <input type="hidden" name="total_price" :value="details.total.toFixed(2)"><br>

                                </div>
                            </div>
                        </div>
                        </div>

                    </div>

            </div>
            <!--/ Product -->

            <!---->

        </div>






        <div class="row cart-2-addres cart-2-fon-minus">
            <div class="col-md-12 ">
                <div class="fon-cart-2 fon-cart-2-top">
                    <div class="form-check custom-control custom-checkbox i-check">
                        <input type="checkbox" class="form-check-input"  value="adventure" id="adventure_id" required>
                        <label for="adventure_id" style="font-family: 'SExtralight'; font-size:14px;">Я согласен с <a href="#">пользовательским соглашением и политикой конфеденциальности.</a></label>
                    </div>
                    <div class="custom-control custom-checkbox i-check">
                        <input type="checkbox"  value="adventure" id="adventure_id2">
                        <label for="adventure_id2" style="font-family: 'SExtralight'; font-size:14px;">Я согласен получать новости от магазина на указанный мной e-mal</label>
                    </div>
                </div>

            </div>
        </div>

        <div class="row  ">
            <div class="col-md-12 ">
                <div class="row fon-cart-2 fon-cart-2-top">
                    <div class="col-md-4">
                        <h3>Итоговая стоимость с доставкой</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="p-2 border bg-light text-center  font-weight-bold"><span class="text-danger full-price">@{{details.total.toFixed(2) }}</span> руб.</div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="cart-steep-1 btn btn-white btn-md">Оформить заказ</button>
                    </div>


                </div>

            </div>
        </div>

        </form>
    </div>


    @include('layouts.footer')

@endsection
