@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Заказы @endslot
        @endcomponent

        <hr>

        <table class="table table-striped">
            <thead>
            <th>Покупатель</th>
            <th>Сумма</th>
            <th>Статус</th>
            <th class="text-right">Изменить</th>
            </thead>
            <tbody>
            @forelse ($orders->sortByDesc('id') as $order)
                <tr>
                    <td>  <a href="{{route('admin.orders.edit', $order)}}">{{$order->clientName}}</a></td>
                    <td>
                        {{$order->total_price}} руб.
                    </td>
                    <td>
                        @foreach($statuses as $status)
                            @if($order->status==$status->id){{$status->status_name}} @break
                            @endif
                        @endforeach
                            </td>
                    <td>
                        <a href="{{route('admin.orders.edit', $order)}}"><i class="fa fa-edit"></i></a>
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
                        {{$orders->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
