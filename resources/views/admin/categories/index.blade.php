@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию</a>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Родитель</th>
            <th>Опубликована</th>
            <th class="text-right">Изменить</th>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>  <a href="{{route('admin.category.edit', $category)}}">{{$category->title}}</a></td>
                    <td>
                        @if($category->parent_id)дочерняя
                        @else <b>Главная</b>
                        @endif
                    </td>
                    <td>
                        @if($category->published==1)Опубликована
                        @else Нет
                        @endif
                            </td>
                    <td>
                        <a href="{{route('admin.category.edit', $category)}}"><i class="fa fa-edit"></i></a>
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
                        {{$categories->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
