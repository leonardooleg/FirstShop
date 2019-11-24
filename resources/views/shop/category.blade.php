@extends('layouts\app', ['all_prints'=>$all_prints])
@section('title', $category->title . " -Магазин")

@section('content')



        <div class="body row">
            <div class="col-md-3 col-sm-12">

                @include('layouts.leftMenu')

            </div>
            <div class="col-md-9 col-sm-12 category-list">

                <div class="row breadcrumb-row">
                <img src="/icon/home.png" class="home-icon"> {{ Breadcrumbs::render('category', $category) }}
                </div>

                <div class="row category-name">
                    <h5>{{$category->title}}</h5>
                </div>

                <div class="row category-content">

                        <div class="col-3 filter-category">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Сортировать по <img src="/icon/arrow_down.png"></label>
                            <select class="custom-select " id="inlineFormCustomSelectPref">
                                <option selected>Новизне</option>
                                <option value="1">Популярности</option>
                                <option value="2">Цене</option>
                            </select>
                        </div>

                        <div class="col-3 filter-category">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Вид одежды <img src="/icon/arrow_down.png"></label>
                            <select class="custom-select " id="inlineFormCustomSelectPref">
                                <option selected>Футболка</option>
                                <option value="1">Свитшот</option>
                                <option value="2">Итд</option>
                            </select>
                        </div>

                        <div class="col-3 filter-category">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Пол <img src="/icon/arrow_down.png"></label>
                            <select class="custom-select" id="inlineFormCustomSelectPref">
                                <option selected>Мужчина</option>
                                <option value="1">Женщина</option>
                                <option value="2">Мальчик</option>
                                <option value="3">Девочка</option>
                            </select>
                        </div>




                    @foreach($products as $product)
                        @include('shop.cardProduct', $product )
                    @endforeach



                </div>


                <div class="row row-pagination">
                    <div class="col-md-6">
                        {{$products->links()}}
                    </div>
                    <div class="col-md-6 ">
                        <div class="coll">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Кол-во принтов на странице</label>
                            <select class="custom-select " id="inlineFormCustomSelectPref">
                                <option value="20" selected>20</option>
                                <option value="40">40</option>
                                <option value="60">60</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    @include('layouts.footer')



@endsection
