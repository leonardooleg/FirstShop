@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><label class="btn btn-primary">Категорий 0</label></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><label class="btn btn-primary">Материалов 0</label></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><label class="btn btn-primary">Посетителей 0</label></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><label class="btn btn-primary">Сегодня 0</label></p>
                </div>
            </div>
        </div>


        <div class="row">
                <div class="card border-primary col-sm-6">
                    <div class="card-header"><a class="btn btn-primary float-left" href="#" role="button">Создать категорию</a></div>
                    <div class="card-body text-primary">
                        <a class="list-group-item" href="#">
                            <h4 class="list-group-item-heading">Категория первая</h4>
                            <p class="list-group-item-text">
                                Кол-во материалов
                            </p>
                        </a>
                    </div>
                </div>

                <div class="card border-danger col-sm-6" >
                    <div class="card-header"><a class="btn btn-danger float-right" href="#" role="button">Создать материал</a></div>
                    <div class="card-body text-danger">
                        <a class="list-group-item" href="#">
                            <h4 class="list-group-item-heading">Материал первый</h4>
                            <p class="list-group-item-text">
                                Категория
                            </p>
                        </a>
                    </div>
                </div>
        </div>
    </div>




@endsection

