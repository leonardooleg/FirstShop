@extends('admin.layouts.app_admin')

@section('content')



        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Панель состояния</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                   По месяцам
                </button>
            </div>
        </div>

        <div id="app">
            <chartline-component></chartline-component>
        </div>
<hr />
        <div class="row">
            <div class="col-sm-3">
                    <p><label class="btn btn-primary">Категорий {{$count_categories}}</label></p>
            </div>
            <div class="col-sm-3">
                    <p><label class="btn btn-success">Материалов {{$count_products}}</label></p>
            </div>
            <div class="col-sm-3">
                    <p><label class="btn btn-danger">Посетителей 0</label></p>
            </div>
            <div class="col-sm-3">
                    <p><label class="btn btn-warning">Сегодня 0</label></p>
            </div>
        </div>

        <div class="row">
            <h3>Товар заканчиваеться</h3>
            <div class="list-group col-md-12">
                @foreach($textiles as $textile)
                <a href="/admin/textiles/{{$textile->id}}/edit" class="list-group-item list-group-item-action list-group-item-danger">{{$textile->title}} ({{$textile->sex}} / {{$textile->cloths}} / {{$textile->type}} / {{$textile->size_world}}({{$textile->size_rus}}) / {{$textile->color}}) - <span class="badge badge-primary badge-pill" style="font-size: 16px"> {{$textile->textiles_qty}} </span></a>
                @endforeach
            </div>
        </div>

        <div class="row">
                <div class="card border-primary col-sm-6">
                    <div class="card-header"><h2 class="float-left">Категории </h2><a class="btn btn-primary float-right" href="{{route('admin.category.create')}}" role="button">Создать категорию</a></div>
                    <div class="card-body text-primary">
                        <ul class="list-group">
                        @foreach($categories as $category)
                                <a class="" href="{{route('admin.category.edit', $category)}}">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <h4 class="list-group-item-heading">{{$category->title}}</h4>
                                        <span class="badge badge-primary badge-pill"> {{$category->products()->count()}}</span>
                                    </li>
                                 </a>
                        @endforeach
                        </ul>
                    </div>
                </div>

                <div class="card border-danger col-sm-6" >
                    <div class="card-header"><h2 class="float-left">Товары </h2><a class="btn btn-danger float-right" href="{{route('admin.category.create')}}" role="button">Создать материал</a></div>
                    <div class="card-body text-danger">
                            @foreach($products as $product)
                                <a class="" href="{{route('admin.product.edit', $product)}}">
                                    <blockquote class="blockquote mb-0">
                                        <h4 class="list-group-item-heading">{{$product->title}}</h4>
                                        <footer class="blockquote-footer"><span class="badge badge-primary badge-pill"> {{$product->categories()->pluck('title')->implode(', ')}}</span></footer>
                                    </blockquote>

                                </a>
                            @endforeach
                    </div>
                </div>
        </div>





@endsection

