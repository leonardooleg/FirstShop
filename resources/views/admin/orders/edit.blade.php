@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Заказ @endslot
        @endcomponent

        <hr />



        <form class="form-horizontal" action="{{route('admin.orders.update', $order)}}" method="post">
            @csrf
            @method('PUT')

            <div class="row cart2-block">
                <div class="col-md-7 data_trek">
                    <div class="fon-cart-2">
                        <div class="alert alert-warning" role="alert">
                            <div class="form-group row">
                                <label for="inputCountry" class="col-sm-4 col-form-label">Статус</label>
                                <div class="col-sm-8">
                                    <select name="status" class="form-control my-bg-grey"  required>
                                        @foreach($statuses as $status)
                                            <option  value="{{$status->id}}" @if ($status->id == $order->status) selected @endif>{{$status->status_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h3>Данные доставки</h3>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">Имя и фамилия</label>
                            <div class="col-sm-8">
                                <input type="text" name="clientName" value="{{$order->clientName}}" class="form-control my-bg-grey" id="inputName" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTel" class="col-sm-4 col-form-label">Телефон</label>
                            <div class="col-sm-8">
                                <input type="tel" name="clientTel" value="{{$order->clientTel}}" class="form-control my-bg-grey" id="inputTel" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-4 col-form-label">E-mail</label>
                            <div class="col-sm-8">
                                <input type="email" name="clientEmail" class="form-control my-bg-grey" value="{{$order->clientEmail}}" id="inputEmail" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCountry" class="col-sm-4 col-form-label">Страна</label>
                            <div class="col-sm-8">
                                <select name="clientCountry" class="form-control my-bg-grey" id="inputCountry" required>
                                    <option>Выбор стран:</option>
                                    @foreach($statuses as $status)
                                        <option  value="RUS">Россия</option>
                                        <option  value="BLR">Беларусь</option>
                                        <option  value="UA">Украина</option>
                                        <option  value="KAZ">Казахстан</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCity" class="col-sm-4 col-form-label">Город</label>
                            <div class="col-sm-8">
                                <input type="text" name="clientCity" class="form-control my-bg-grey" value="{{$order->clientCity}}" id="inputCity" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAddress" class="col-sm-4 col-form-label">Адрес</label>
                            <div class="col-sm-8">
                                <input type="text" name="clientAddress" class="form-control my-bg-grey" value="{{$order->clientAddress}}" id="inputAddress" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputComment" class="col-sm-4 col-form-label ">Комментарий к заказу</label>
                            <div class="col-sm-8">
                                <textarea class="form-control my-bg-grey" name="clientComment"  id="inputComment" rows="5">{{$order->clientComment}}</textarea>
                            </div>
                        </div>
                    </div>


                    <div class="fon-cart-2 fon-cart-2-top">
                        <h3>Способы оплаты</h3>
                        <label>
                            <input type="radio" name="type_pay" class="type_pay" value="nal" @if ($order->type_pay == 'nal') checked @endif>
                            <img src="/img/nal_pay.png">
                        </label>

                        <label>
                            <input type="radio" name="type_pay" class="type_pay" value="cart" @if ($order->type_pay == 'cart') checked @endif>
                            <img src="/img/bank_pay.png">
                        </label>
                    </div>
                </div>
                <div class="col-md-5 cart_items_blok ">
                    <div class="fon-cart-2">
                        <h3>Заказ</h3>
                        @foreach ($items as $item)
                            <div class="CartItem row" data-autotest="CartItem">
                                <div class="col-md-4">
                                    <img class="img_cart" src="/storage/{{$item['attributes']['img']}}" alt="preview">
                                </div>
                                <div class="col-md-4">
                                    <div class="">Артикул: {{$item['id']}}</div>
                                    <input type="hidden"  value="{{$item['id']}}">
                                    <div class="">Мужская футболка хлопок</div>
                                    <div  class=""> <input type="hidden"  :value="item.name"> {{$item['name']}}</div>
                                    <div  class=""> <input type="hidden"  :value="item.size">Размер: {{$item['attributes']['size_world']}} ({{$item['attributes']['size_rus']}})</div>
                                    <div  class=""> <input type="hidden"  :value="item.color">Цвет: {{$item['attributes']['color_name']}}</div>
                                    <div  class=""> <input type="hidden"  :value="item.quantity">Кол-во: {{$item['quantity']}}</div>
                                </div>
                                <div class="col-md-4  d-flex align-items-center" style="">
                                    <div class=" ">{{$item['quantity'] * $item['price']}} руб.</div>
                                </div>

                            </div>
                        @endforeach


                        <hr />
                        <div class="row ">

                            <div class="col-md-3">
                                <div class="">Промо-код</div>
                            </div>
                            <div class="col-md-3">
                                <form class="promo-form">
                                    <div class="font-weight-bold">promo20</div>
                                    <input type="hidden" name="promo" value="">
                                </form>
                            </div>
                            <div class="col-md-6 ">
                                <span class="">Итоговая стоимость <b>  {{$order->total_price }} руб.</b></span>

                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </div>

        </form>

    </div>
    <script type="application/javascript">
        function deleteCategory(f) {
            if (confirm("Вы уверены, что хотите удалить выделенный пункт?\nЭта операция не восстановима."))
                f.submit();
        }
        console.log('delete')
    </script>

@endsection
