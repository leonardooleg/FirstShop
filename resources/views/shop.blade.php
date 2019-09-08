@extends('layouts\app')

@section('content')


    <content>

        <div class="body row">
            <div class="col-md-2 col-sm-12">

                @include('layouts.leftMenu')

            </div>
            <div class="col-md-10 col-sm-12">

                 <!---->
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            @foreach($shops as $shop)
                                <div class="col-md-12">
                                    <h3>{{ $shop->title }}</h3>
                                    <hr />
                                    <div class="row">
                                        @foreach($shop->children as $cats)
                                            <div class="col-md-4">
                                                <h4><a href="{{route('shop.edit', ['id'=>$cats->id])}}"><i class="fa fa-edit"></i>{{ $cats->title }}</a></h4>
                                                <hr />
                                                @foreach($cats->children as $cat)
                                                    <h5><a href="{{route('shop.edit', ['id'=>$cats->id])}}"><i class="fa fa-edit"></i>{{$cat->title}}</a></h5>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button class="btn btn-primary" name="add_shop">Добавить категорию</button>
                </div>
                 <!---->

            </div>
        </div>
    </content>
    @include('layouts.footer')



@endsection
