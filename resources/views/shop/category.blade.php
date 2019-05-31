@extends('layouts\app', ['all_prints'=>$all_prints])
@section('title', $category->title . " -Магазин")

@section('content')
    @php
        $c=1;
    @endphp
            @foreach($products as $product)
                @if($c==1)
                    <div class="card-group">
                        @endif
                        <div class="card col-3">
                            <a href="{{route('product', $product->slug)}}">
                                <img class="card-img-top" data-src="{{$product->img}}" alt="100%x180" src="{{$product->img}}" data-holder-rendered="true" style="">
                                <div class="card-body">
                                    <h5 class="card-title"> {{$product->title}}</h5>
                                    <p class="card-text">{!! $product->description_short !!}</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </a>
                        </div>

                        @if($c==4)
                    </div>
                @endif
                @php
                    if($c==4) $c=1;
                     else $c++;
                @endphp
            @endforeach
            @php
                if($c==2) echo '</div>';

            @endphp
            <div class="span" style="width: 100%;"></div>
            {{$products->links()}}

@endsection
