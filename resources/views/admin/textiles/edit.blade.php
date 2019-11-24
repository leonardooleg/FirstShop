@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование товара @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.textiles.update', $textiles)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}

            {{-- Form include --}}
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputState">Связать с категорией</label>
                    <select id="inputState" name="textiles_category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($textiles->textiles_category==$category->id)  selected="" @endif>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState1">Ткань</label>
                    <select id="inputState1" name="textiles_cloths" class="form-control">
                        @foreach($cloth as $cloth_one)
                            <option value="{{$cloth_one->id_cloths}}" @if($textiles->textiles_cloths==$cloth_one->id_cloths)  selected="" @endif>{{$cloth_one->cloths}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState2">Пол</label>
                    <select id="inputState2" name="textiles_sex" class="form-control">
                        @foreach($sex as $sex_one)
                            <option value="{{$sex_one->id_sex}}" @if($textiles->textiles_sex==$sex_one->id_sex)  selected="" @endif>{{$sex_one->sex}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState3">Тип</label>
                    <select id="inputState3" name="textiles_type" class="form-control">
                        @foreach($type as $type_one)
                            <option value="{{$type_one->id_type}}" @if($textiles->textiles_type==$type_one->id_type)  selected="" @endif>{{$type_one->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState4">Размер</label>
                    <select id="inputState4" name="textiles_size" class="form-control">
                        @foreach($size as $size_one)
                            <option value="{{$size_one->id_size}}" @if($textiles->textiles_size==$size_one->id_size)  selected="" @endif>{{$size_one->size_world}} ( {{$size_one->size_rus}}  )</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState5">Цвет</label>
                    <select id="inputState5" name="textiles_color" class="form-control">
                        @foreach($color as $color_one)
                            <option value="{{$color_one->id_color}}" @if($textiles->textiles_color==$color_one->id_color)  selected="" @endif>{{$color_one->color}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-1">
                    <label for="inputZip">Количество</label>
                    <input type="text" name="textiles_qty"  value="{{$textiles->textiles_qty ?? ''}}"  class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputZip">Характиристики</label>
                    <textarea class="form-control" name="textiles_desc"  aria-label="With textarea"> {{$textiles->textiles_desc ?? ''}}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>

        </form>
            <form onsubmit="if(confirm('Удалить?')){ return true}else{return false}" action="{{route('admin.textiles.destroy', $textiles)}}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger float-right" type="submit" value="Удалить">
            </form>
            <script>
                function deleteCategory(f) {
                    if (confirm("Вы уверены, что хотите удалить выделенный пункт?\nЭта операция не восстановима."))
                        f.submit();
                }
                console.log('delete')
            </script>
    </div>
@endsection
