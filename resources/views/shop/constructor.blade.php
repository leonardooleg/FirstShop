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
                    <img src="/icon/home.png" class="home-icon">  <h3 style="   display: inline-flex;" id="clothing">Конструктор дизайна</h3>
                </div>
            </div>
        </div>
        <!-- Construct -->
        <div class=" row">
            <section class="construct col-md-12" itemscope="">
                <!---Construct2-->
                <div>
                    <div id="clothing-designer" class="fpd-container fpd-shadow-2 fpd-sidebar fpd-tabs fpd-tabs-side fpd-top-actions-centered fpd-bottom-actions-centered fpd-views-inside-left"></div>

                    <br /><br />
                    <div class="fpd-right">
                        <span class="price badge badge-inverse"><span id="thsirt-price"></span> $</span>
                    </div>
                    <div id="my-variations"></div>
                </div>
                <!---Construct2-->





            </section>
            <!--/ Product -->

            <!---->

        </div>
    </div>


    @include('layouts.footer')

@endsection
