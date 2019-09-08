<div id="one_head">
    <div class="container">
        <div class="row head_line">
            <div class="all-count col-md-6 ">Кол-во принтов в базе @if (isset($all_prints)){{$all_prints }} @endif, кол-во проданных изделий 0</div>
            <div class="zamanuha col-md-6"> «Иван С. из Москвы только-что заказал футболку Панда»</div>
        </div>
    </div>
</div>
<div id="twoo_head">
    <div class="container">
    <div class="row">
        <div class="col-md-2 head_block"><a href="/"> <img src="/img/logo.png" class="logo"> </a></div>
        <div class="col-md-2 logo_text head_block">Майки, футболки, одежда и другое на заказ </div>
        <div class="col-md-2 head_block">
            <img src="/icon/phone.png"> +7 (495) 663-73-73<br>
            <img src="/icon/mail.png">  add@shop.com<br>
            <img src="/icon/skype.png">  logineskype</div>
        <div class="col-md-6 head_block head_block_right">
            <div class="col-12">
                <p class="head_right">Техническое меню  <img src="/icon/setting.png"> </p>
                (<a href="#">помощь</a>, <a href="#">доставка</a>, <a href="#">оплата</a>, <a href="#">возврат</a>, <a href="#">о магазине</a>, <a href="{{route('admin.index')}}">где мой заказ?</a> )
            </div>
           <p>
               <img src="/icon/favorites.png"><span class="head_block_right_end"> Избранное</span> <span> </span>
              <a href="/cart" id="cart" class="shopping-cart"><img src="/icon/cart.png"><span class="badge">@{{itemCount}}</span><span>Корзина</span> </a>
            </p>


        </div>
    </div>
    <div id="tree_head" class="row ">
            <div class="col-md-3 tree_head_block">
                <a href="/constructor"><button type="button" class="btn btn-warning btn-lg btn-block">Напечатай свой дизайн</button></a>
            </div>
            <div class="col-md-7 tree_head_block">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 search_btn" type="search" style="width: 80%" placeholder="Поиск" aria-label="Поиск">
                    <button class="btn my-2 my-sm-0 search_btn_sub" type="submit">Найти <img src="/icon/search.png"></button>
                </form>
            </div>
            <div class="col-2 tree_head_block">

            </div>

    </div>
    </div>
</div>

