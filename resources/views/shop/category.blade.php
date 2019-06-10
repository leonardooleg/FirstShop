@extends('layouts\app', ['all_prints'=>$all_prints])
@section('title', $category->title . " -Магазин")

@section('content')

    {{ Breadcrumbs::render('category', $category) }}


                    <div class="row">
                        @foreach($products as $product)
                            <div class="card col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <a href="{{route('product', $product->slug)}}">
                                    <img class="card-img-top" data-src="{{$product->image}}" alt="100%x180" src="{{$product->image}}" data-holder-rendered="true" style="">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{$product->title}}</h5>
                                        <p class="card-text">{!! $product->description_short !!}</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

            <div class="span" style="width: 100%;"></div>
            {{$products->links()}}

@endsection
