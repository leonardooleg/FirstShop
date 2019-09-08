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



    <content>

        <div class="body">

                 <!---->

                <!-- breadcrumbs -->
                <div class="product-top">
                    <div class="product-breadcrumbs col-md-10 col-xs-6">
                        <h1>Корзина</h1>
                    </div>
                </div>
                <!-- breadcrumbs -->
                <!-- Product -->
                <section class="product" itemscope="" itemtype="http://schema.org/Product">
                    <!-- main content -->
                    <div class="product__top-block">
                        <div class="row">

                            <div class="col-12 col-md-12 col-lg-9">
                                <div class="lTtPsdOP" data-autotest="CartItem"  v-for="item in items">
                                    <div class="_3bv_rPFg row">
                                        <div class="j69EnncZ col-3 col-sm-3 col-md-3 col-lg-3">
                                            <div class="_3anEtFHP">
                                                <img class="L1jEFUBa" src="https://storage.vsemayki.ru/images/0/0/101/101911/previews/people_1_manshort_front_white_250.jpg" alt="preview">
                                            </div>
                                        </div>
                                        <div class="_2ZH7wIr5 col-9 col-sm-6 col-md-6 col-lg-5">
                                            <a class="_1Y__Rvje" v-bind:href="/product-cart/ + item.id">@{{ item.name }}</a>
                                            <div class="MJBRg4up">Мужская футболка хлопок</div>
                                            <div class="_2hVmPi_T"><div class="_1vj1PLpp">
                                                    <div class="_3VRxcnGO" data-autotest="Variants">
                                                        <div class="_3VRxcnGO">
                                                            <div class="_1BlUnQMc">@{{ item.attributes.size }}</div>
                                                        </div>
                                                        <div class="_3VRxcnGO"><div>
                                                                <div class="_1fmN97i0" style="background: rgb(255, 255, 255);"></div>
                                                                <div class="_2uffDi-e">@{{ item.attributes.color }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_3j2DtuOn">
                                                    <div class="aQBZWaSX">
                                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span>В избранное</span>
                                                    </div>
                                                    <button class="aQBZWaSX">
                                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill="#09F" d="M13.435 0l.707.707L.707 14.142 0 13.435z"></path>
                                                            <path fill="#09F" d="M1.082 0L.375.707 13.81 14.142l.707-.707z"></path>
                                                        </svg>
                                                        <span v-on:click="removeItem(item.id)" >Удалить товар</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_27skRmL- col-12 col-sm-3 col-md-3 col-lg-4">
                                            <div class="_2Aes8rUf">
                                                <div data-autotest="ItemSum">
                                                    <div class="_315pN5cj"><span class="_122pJAhV">@{{ item.price }}</span><span class="b-gfqyPc">1070 ₽</span></div>
                                                </div>
                                            </div>
                                            <div class="_3Lw-2PJC">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="vMKGtnzs">
                                                            <button type="fill" class="_3GVyBdjn _3_Ozh1xI _2uGr86qQ other btn btn-other btn-md">−</button>
                                                            <input type="number" maxlength="2" min="1" max="100" step="1" value=" @{{ item.quantity }} ">@{{ item.quantity }}
                                                            <button type="fill" class="_1QwMulE8 _3_Ozh1xI _2uGr86qQ other btn btn-other btn-md">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="_3i3-tG_7 col-12 col-md-12 col-lg-3">
                                <div class="_2uo109ei"><div class="_1b7dicJp"><div class="_3aCKdl2Q">Промокод</div>
                                        <form class="qE6y1Qce">
                                            <input type="text" name="promo" placeholder="Введите промокод" value="">
                                            <button type="fill" class="_2tQpu_lc _3_Ozh1xI _2uGr86qQ white btn btn-white btn-md">Применить</button>
                                        </form>
                                        <div class="_36yaB-e8"><div class="_1yUK4C3D"><span class="_1yUK4C3D"><span class="_82uayc8X">Товары</span><span class="GYPA3-Xa">2</span></span><span>2380 ₽</span></div>
                                            <div class="_1yUK4C3D">
                                                <span class="_82uayc8X">Скидка на товары</span>
                                                <span class="xelhMMDa">-400 ₽</span>
                                            </div>
                                        </div>
                                        <div class="_18FiIMry">
                                            <div class="_3QL9fY_9">Итого</div>
                                            <div class="_3asVMfqj">1980 ₽</div>
                                        </div>
                                    </div><div class="_3KIsA_XK row"><a href="/cart/delivery" class="_38Q3eyBy">Оформить заказ</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--/ main content -->

                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col"><div class="_1lKlHw7C"><h2>Вас может заинтересовать:</h2>
                                <div>
                                    <div class="slick-slider a2cboztt _3STaTZGf _2dg9WESH slick-initialized" dir="ltr"><button class="slick-arrow prev" disabled="" style="display: block;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg></button><div class="slick-list"><div class="slick-track" style="opacity: 1; transform: translate3d(-1296px, 0px, 0px); width: 11664px;"><div data-index="-6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;"><div>
                                                        <div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/1472653?color=black&amp;size=xxs_42">
                                                                <img class="img-fluid" src="https://storage.vsemayki.ru/images/0/1/1472/1472653/previews/people_1_manshort_front_black_250.jpg" alt="preview"></a>
                                                            <div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Haunted Family</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1090₽</span><span class="_10XDz5qv">1310₽</span></div></div></div></div><div data-index="-5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/1754177?color=red&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/1/1754/1754177/previews/people_1_manshort_front_red_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Криминальное чтиво</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1125₽</span><span class="_10XDz5qv">1350₽</span></div></div></div></div><div data-index="-4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/170225?color=black&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/0/170/170225/previews/people_1_manshort_front_black_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Выше нос, кусок мяса</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1090₽</span><span class="_10XDz5qv">1310₽</span></div></div></div></div><div data-index="-3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/625870?color=black&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/0/625/625870/previews/people_1_manshort_front_black_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Тарантино</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1125₽</span><span class="_10XDz5qv">1350₽</span></div></div></div></div><div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/1807623?color=black&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/1/1807/1807623/previews/people_1_manshort_front_black_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">БАЛО ЗАЕ</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1125₽</span><span class="_10XDz5qv">1350₽</span></div></div></div></div><div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/1853039?color=melange&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/1/1853/1853039/previews/people_1_manshort_front_melange_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Rick Sanchez and Morty Smith</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1215₽</span><span class="_10XDz5qv">1460₽</span></div></div></div></div><div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/306133?color=black&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/0/306/306133/previews/people_1_manshort_front_black_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Brazzers</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1090₽</span><span class="_10XDz5qv">1310₽</span></div></div></div></div><div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/1270951?color=black&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/1/1270/1270951/previews/people_1_manshort_front_black_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Weyland-Yutani</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1125₽</span><span class="_10XDz5qv">1350₽</span></div></div></div></div><div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/1579007?color=black&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/1/1579/1579007/previews/people_1_manshort_front_black_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">ОРДА</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">1125₽</span><span class="_10XDz5qv">1350₽</span></div></div></div></div><div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;"><div><div class="fNduu515"><a href="https://www.vsemayki.ru/product/manshort/110431?color=white&amp;size=xxs_42"><img class="img-fluid" src="https://storage.vsemayki.ru/images/0/0/110/110431/previews/people_1_manshort_front_white_250.jpg" alt="preview"></a><div class="_1uoyV3ml"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 15l-.37-.236C8.317 14.565 1 9.853 1 5.604 1 2.58 3.204 1 5.381 1 6.773 1 8.077 1.633 9 2.727 9.92 1.635 11.225 1 12.62 1 14.796 1 17 2.581 17 5.604c0 4.249-7.318 8.961-7.63 9.16L9 15z" stroke="#09F" stroke-linejoin="round"></path></svg></div><a class="_1FjOMED_">Washington Capitals Ovechkin 8</a><div class="_3qbfAOkN">Мужская футболка хлопок</div><div class="_2WOtbIVq"><span class="_17qNqEaA">920₽</span><span class="_10XDz5qv">1105₽</span></div></div></div></div><div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 216px;"><div>

                                                    </div></div></div>
                                        </div>
                                    </div>


                </section>
                <!--/ Product -->

                 <!---->

            </div>

    </content>

    @include('layouts.footer')

@endsection
