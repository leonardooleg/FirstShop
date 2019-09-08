<ul class="list-group list-group-flush striped-list dropright block-left-menu">
    <li class="list-group-item head_left_menu" >
        <img src="/icon/menu_left.png"> <span class="caret">Меню принтов</span>
    </li>
    <li class="list-group-item" >
        <a href="/new" style="color: #0e0e0e">
           <img src="/icon/menu_left_new.png"> Новинки
        </a>
    </li>
    <li class="list-group-item" >
        <a href="/sale" style="color: #0e0e0e">
           <img src="/icon/menu_left_sale.png"> Распродажи
        </a>
    </li>

            @foreach ($categories as $project)
                @include('layouts.leftMenuHead', ['project' => $project, 'first' => true] )
            @endforeach
</ul>

<div class="left_banner">
    <img src="/img/left_banner.png">
    <img src="/img/left_banner.png">
</div>

