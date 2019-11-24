@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Добавления тканей @endslot
            @slot('parent') Главная @endslot
            @slot('active') Ткани @endslot
        @endcomponent

            <hr>

            <a href="{{route('admin.textiles.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Добавить ткань</a>


            <table class="table table-striped">
                <thead>
                <th>Наименование</th>

                <th>Количество</th>
                <th class="text-right">Изменить</th>
                </thead>
                <tbody>
                @forelse ($textiles as $textile)
                    <tr>
                        <td>  <a href="textiles/{{$textile->id}}/edit">{{$textile->title}}</a></td>

                        <td>
                            {{$textile->textiles_qty}}
                        </td>
                        <td>
                            <a href="textiles/{{$textile->id}}/edit"><i class="fa fa-edit"></i></a>
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
                            {{$textiles->links()}}
                        </ul>
                    </td>
                </tr>
                </tfoot>
            </table>
    </div>

@endsection
