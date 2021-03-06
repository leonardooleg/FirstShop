@extends('layouts\app', ['all_prints'=>$all_prints])
@section('content')



<div class="body">
        <div class="row">
            <div class="col-md-3 col-sm-12">

                @include('layouts.leftMenu')

            </div>
            <div class="col-md-9 col-sm-12">

                 <!---->

                <div class="bd-example">

                                <img class="d-block w-100"  src="/img/UppBanner.png" data-holder-rendered="true">

                </div>
                <div class="span"></div>
                <div class="welcom-content">
                    <div class="row">
                        <div class="col-4 lightning">
                            <h5> <img src="/icon/lightning.png"> Хиты сезона </h5>
                        </div>

                        <div class="col-8 filter">
                            <div style="float: right">
                                <div class="btn-group" role="group" >
                                    <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="/icon/shirt.png" style="float: left"> Вид одежды<br>
                                        Футболка, свитшот, итд
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                        <a class="dropdown-item" href="#">Футболка</a>
                                        <a class="dropdown-item" href="#">Свитшот</a>
                                        <a class="dropdown-item" href="#">Майка</a>
                                    </div>
                                    </div>
                                <div class="btn-group" role="group" >
                                    <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="/icon/sex.png" style="float: left"> Пол<br>
                                        Муж./Жен./Мальч./Девоч.
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Мужчина</a>
                                        <a class="dropdown-item" href="#">Женщина</a>
                                        <a class="dropdown-item" href="#">Мальчик</a>
                                        <a class="dropdown-item" href="#">Девочка</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="span"></div>
                    <div class="row">

                        @foreach($products as $product)
                            @include('shop.cardProduct', $product )
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12 see-oll">
                            <a href="/all"><button type="button" class="btn btn-warning">Смотреть все</button> </a>
                        </div>
                    </div>
                </div>
                <div class="span"></div>



                <div class="span"></div>

                 <!---->

            </div>
        </div>
        <div class="container welcom-content">
            <div class="row">

            </div>
        </div>

        <div class="container welcom-content">
            <div class="row">

            </div>
        </div>

        <div class="container welcom-top-1">
            <div class="row">
                <div class="card text-white col-md-4">
                    <img src="http://leonardooleg.club/storage/uploads/product/new_year.png" class="card-img" alt="...">
                    <img class="welcome_sloy" src="/img/welcome_sloy.png">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Раздел: Новый год</h5>
                    </div>
                </div>
                <div class="card  text-white col-md-4">
                    <img src="http://leonardooleg.club/storage/uploads/product/new_year.png" class="card-img" alt="...">
                    <img class="welcome_sloy" src="/img/welcome_sloy.png">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Раздел: Новый год</h5>
                    </div>
                </div>
                <div class="card  text-white col-md-4">
                    <img src="http://leonardooleg.club/storage/uploads/product/new_year.png" class="card-img" alt="...">
                    <img class="welcome_sloy" src="/img/welcome_sloy.png">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Раздел: Новый год</h5>
                    </div>
                </div>
            </div>
        </div>

    <div class=" ">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Большой</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Баннер навигации</text></svg>
    </div>

    <div class="container welcom-top-1">
        <div class="row">
            <div class="card text-white col-md-6">
                <img src="http://leonardooleg.club/storage/uploads/product/footbol.png" class="card-img" alt="...">
                <img class="welcome_sloy" src="/img/welcome_sloy.png">
                <div class="card-img-overlay">
                    <h5 class="card-title">Раздел: Футбол</h5>
                </div>
            </div>
            <div class="card text-white col-md-6">
                <img src="http://leonardooleg.club/storage/uploads/product/footbol.png" class="card-img" alt="...">
                <img class="welcome_sloy" src="/img/welcome_sloy.png">
                <div class="card-img-overlay">
                    <h5 class="card-title">Раздел: Футбол</h5>
                </div>
            </div>
        </div>
    </div>



    @include('layouts.footer')


@endsection
