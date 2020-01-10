<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 15.11.2018
 * Time: 19:34
 */
?>
@extends('layouts\app', ['all_prints'=>$all_prints])
@section('title', '')
@section('meta_keyword', '')
@section('meta_description', '')
@section('content')


    <div class="body">
        <div class="product-top row">
            <div class="product-breadcrumbs col-md-12 col-xs-12 ">
                <div class="breadcrumb-row">
                    <img src="/icon/home.png" class="home-icon"> 000
                </div>
            </div>
        </div>
        <!-- breadcrumbs -->
        <!-- Product -->
        <div class=" row">
            <section class="product" itemscope="" itemtype="http://schema.org/Product">
                <!---Construct2-->
                <div id="main-container">
                    <h3 id="clothing">Конструктор дизайна</h3>
                    <div id="clothing-designer" class="fpd-container fpd-shadow-2 fpd-topbar fpd-tabs fpd-tabs-side fpd-top-actions-centered fpd-bottom-actions-centered fpd-views-inside-left"> </div>
                    <br />

                    <div class="fpd-clearfix" style="margin-top: 30px;">
                        <div class="api-buttons fpd-container fpd-left">
                            <a href="#" id="print-button" class="fpd-btn">Печать</a>
                            <a href="#" id="image-button" class="fpd-btn">Создать изображение</a>
                            <a href="#" id="checkout-button" class="fpd-btn">Проверить</a>
                            <a href="#" id="recreation-button" class="fpd-btn">Пересоздать</a>
                        </div>

                    </div>

                    <p class="fpd-container" style="display: none">
                        Only working on a webserver:<br />
                        <span class="fpd-btn" id="save-image-php">Save image with php</span>
                        <span class="fpd-btn" id="send-image-mail-php">Send image to mail</span>
                    </p>

                </div>
                <!---Construct2-->






            </section>
            <!--/ Product -->

            <!---->

        </div>
    </div>


    @include('layouts.footer')

@endsection
