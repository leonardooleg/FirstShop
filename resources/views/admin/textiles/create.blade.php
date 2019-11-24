@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Добавить ткань @endslot
            @slot('parent') Главная @endslot
            @slot('active') Ткань @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.textiles.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputZip">Название</label>
                    <input type="text" name="textiles" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState1">Ткань</label>
                    <select id="inputState1" name="textiles_cloth" class="form-control">
                        <option selected>Выбирете...</option>
                        @foreach($cloth as $cloth_one)
                            <option value="{{$cloth_one->id_cloths}}">{{$cloth_one->cloths}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState2">Пол</label>
                    <select id="inputState2" name="textiles_sex" class="form-control">
                        <option selected>Выбирете...</option>
                        @foreach($sex as $sex_one)
                            <option value="{{$sex_one->id_sex}}">{{$sex_one->sex}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState3">Тип</label>
                    <select id="inputState3" name="textiles_type" class="form-control">
                        <option selected>Выбирете...</option>
                        @foreach($type as $type_one)
                            <option value="{{$type_one->id_type}}">{{$type_one->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState4">Размер</label>
                    <select id="inputState4" name="textiles_size" class="form-control">
                        <option selected>Выбирете...</option>
                        @foreach($size as $size_one)
                            <option value="{{$size_one->id_size}}">{{$size_one->size_world}} ( {{$size_one->size_rus}}  )</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState5">Цвет</label>
                    <select id="inputState5" name="textiles_color" class="form-control">
                        <option selected>Выбирете...</option>
                        @foreach($color as $color_one)
                            <option value="{{$color_one->id_color}}">{{$color_one->color}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-1">
                    <label for="inputZip">Количество</label>
                    <input type="text" name="textiles_qty" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputZip">Характиристики</label>
                    <textarea class="form-control" name="textiles_desc" aria-label="With textarea"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>

@endsection
