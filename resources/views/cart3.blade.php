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
                    Оформление заказа  <a class="link-back" href="/"> <button type="button" class="btn btn-back">Вернуться на главную <img src="/icon/arrow_back.png"> </button></a>
                </div>
            </div>
        </div>
        <!-- breadcrumbs -->
        <!-- breadcrumbs -->
        <!-- Product -->

        <div class="cart-block row">
            <div class=" col-md-12 col-xs-12 ">
                <div class="">
                    <br>
                    @if($success==true)
                        <div class="alert alert-success" role="alert">
                            {{$message}}
                        </div>
                        @else
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                    @endif
                        <div class="form-group row">
                            <label for="inputTel" class="col-sm-3 col-form-label">Номер вашего заказа</label>
                            <div class="col-sm-4">
                                <input type="text" placeholder="#1234567" class="form-control my-bg-grey" id="inputTel" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Ваш E-mail для оповещений</label>
                            <div class="col-sm-4">
                                <input type="email"  class="form-control my-bg-grey" placeholder="ivanov.ivan@ivanovivan.ru" id="inputEmail" disabled>
                            </div>
                        </div>
                        <div class="bd-callout bd-callout-info">
                            <p>После одобрения заказа ві получете на свой E-mail оповищение.</p>
                            <p>Если вам нужна дополнительная иформация обращайтесь в поддержку.</p>
                        </div>
                </div>
            </div>
        </div>

    </div>


    @include('layouts.footer')

@endsection
