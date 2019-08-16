@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список Товаров @endslot
            @slot('parent') Главная @endslot
            @slot('active') -Продукты @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Добавить товар</a>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Категория</th>
            <th>Опубликована</th>
            <th class="text-right">Изменить</th>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>  <a href="{{route('admin.product.edit', $product)}}">{{$product->title}}</a></td>
                    <td>
                        @if($product->parent_id)дочерняя
                        @else <b>Главная</b>
                        @endif
                    </td>
                    <td>
                        @if($product->published==1)Опубликована
                        @else Нет
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.product.edit', $product)}}"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$products->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
