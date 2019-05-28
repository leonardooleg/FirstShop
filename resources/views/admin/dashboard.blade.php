@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><label class="btn btn-primary">Категорий {{$count_categories}}</label></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><label class="btn btn-primary">Материалов {{$count_products}}</label></p>
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
                    <div class="card-header"><a class="btn btn-primary float-left" href="{{route('admin.category.create')}}" role="button">Создать категорию</a></div>
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
                    <div class="card-header"><a class="btn btn-danger float-right" href="{{route('admin.category.create')}}" role="button">Создать материал</a></div>
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
    </div>




@endsection

