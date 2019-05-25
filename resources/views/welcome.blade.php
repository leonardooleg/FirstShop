@extends('index', ['all_prints'=>$all_prints])
@section('content')
            <div class="body row">
                <div class="col-2">
                    <ul>
                        <li>Меню 1</li>
                        <li>Меню 2</li>
                        <li>Меню 3</li>
                        <li>Меню 4</li>
                        <li>Меню 5</li>
                        <li>Меню 6</li>
                        <li>Меню 7</li>
                    </ul>
                </div>
                <div class="col-10">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item carousel-item-next carousel-item-left">
                                    <img class="d-block w-100" data-src="holder.js/400x200?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [400x200]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eaf5be6c%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eaf5be6c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.921875%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" data-src="holder.js/400x200?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [400x200]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eaf5be6e%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eaf5be6e%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item active carousel-item-left">
                                    <img class="d-block w-100" data-src="holder.js/400x200?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [400x200]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eaf5be6f%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eaf5be6f%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                        <div class="span"></div>

                        <div class="row">
                            <div class="col-4">
                                <button type="button" class="btn btn-primary btn-lg btn-block">Заголовок раздела</button>
                            </div>
                            <div class="col-4">
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Вид одежды
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Меню пол
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <div class="span"></div>

                        @php
                        $c=1;
                        @endphp
                        @foreach($products as $product)
                            @if($c==1)
                        <div class="card-group">
                            @endif
                                <div class="card col-3">
                                    <a href="product/{{$product->id}}">
                                        <img class="card-img-top" data-src="{{$product->img}}" alt="100%x180" src="{{$product->img}}" data-holder-rendered="true" style="">
                                        <div class="card-body">
                                            <h5 class="card-title"> {{$product->name}}</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </a>
                                </div>

                            @if($c==4)
                        </div>
                        @endif
                    @php
                       if($c==4) $c=1;
                        else $c++;
                    @endphp
                    @endforeach
                    @php
                        if($c==2) echo '</div>';

                    @endphp
                        <div class="span"></div>

                        <button type="button" class="btn btn-primary btn-lg">Смотреть все</button>

                        <div class="span"></div>
                </div>
                <div style="text-align: center">
                        <div><h3>Банер</h3></div>

                        <div class="span"></div>

                        <div>
                            Хочешь узнавать о новых принтах и акциях первым?

                        <button type="button" class="btn btn-primary btn-lg btn-block">Подписывайся на рассылку!</button>
                        </div>

                    <div class="span"></div>

                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22369%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20369%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eeadd4f5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eeadd4f5%22%3E%3Crect%20width%3D%22369%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22138.4609375%22%20y%3D%2298.1%22%3E369x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </div>
                        <div class="card">
                            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22369%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20369%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eeadd4f6%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eeadd4f6%22%3E%3Crect%20width%3D%22369%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22138.4609375%22%20y%3D%2298.1%22%3E369x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </div>
                        <div class="card">
                            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22369%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20369%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eeadd4f7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eeadd4f7%22%3E%3Crect%20width%3D%22369%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22138.4609375%22%20y%3D%2298.1%22%3E369x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" data-src="holder.js/500px180/" alt="100%180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22369%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20369%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eeadd4f7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eeadd4f7%22%3E%3Crect%20width%3D%22369%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22138.4609375%22%20y%3D%2298.1%22%3E369x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </div>
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22369%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20369%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eeadd4f5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eeadd4f5%22%3E%3Crect%20width%3D%22369%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22138.4609375%22%20y%3D%2298.1%22%3E369x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </div>
                        <div class="card">
                            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22369%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20369%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eeadd4f6%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eeadd4f6%22%3E%3Crect%20width%3D%22369%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22138.4609375%22%20y%3D%2298.1%22%3E369x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </div>
                        <div class="card">
                            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22369%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20369%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166eeadd4f7%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166eeadd4f7%22%3E%3Crect%20width%3D%22369%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22138.4609375%22%20y%3D%2298.1%22%3E369x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </div>
                    </div>

                    <div class="span"></div>

                    <div class="card text-center">
                        <div class="card-header">
                            Featured 1
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Достоинства магазина</h5>
                            <p class="card-text">Только качественные и безопасные материалы.</p>
                            <a href="#" class="btn btn-primary">Бесплатный обмен и возврат</a>
                        </div>
                        <div class="card-footer text-muted">
                          Быстрая доставка
                        </div>
                    </div>

                    <div class="span"></div>
                    <div class="span"></div>

                    <div class="card text-center">
                        <div class="card-header">
                            Featured 2
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Отзывы</h5>
                            <p class="card-text">Добавляй фотографии в наших футболках м хештегом #mnogoprintov.</p>
                            <a href="#" class="btn btn-primary">и засветись на нашем сайте</a>
                        </div>
                        <div class="card-footer text-muted">
                            Далее фотки по хештегу
                        </div>
                        <button type="button" class="btn btn-primary btn-lg">Смотреть все</button>
                    </div>

                    <div class="span"></div>
                    <div class="span"></div>

                    <div class="">

                        <h2 dir="ltr" style="text-align: center;">Оригинальные футболки на заказ</h2>
                        <p dir="ltr"><strong>Футболки</strong> перестали быть обыкновенным предметом одежды. Теперь это средство самовыражения для людей любого возраста и социального положения. Ходить в одинаковых вещах базовых цветов можно на работу и официальные встречи. В неформальной обстановке люди предпочитают носить яркие модели с затейливыми принтами.</p>
                        <p dir="ltr">В нашем магазине можно заказать футболку с собственным дизайном или найти подходящий вариант среди тысяч готовых. Выбирайте остроумные или злободневные надписи, шуточные рисунки или изображения знаменитостей. Для удобства выбора принты разделены по тематическим категориям. Картинка по душе найдётся для каждого.</p>
                        <h2 dir="ltr">Материалы и способы печати</h2>
                        <p dir="ltr">Главные достоинства футболки — мягкость и комфорт. Поэтому важно качество ткани. Мы выбираем материал в зависимости от типа печати. Для прикольных футболок с полной запечаткой используется 100% полиэстер. Он сохраняет яркость изображения и выдерживает стирки, не растягиваясь и не закатываясь.</p>
                        <p dir="ltr">Любители натуральных тканей оценят футболки из 100% хлопка и тонкого трикотажа Пенье (95% хлопка, 5% эластана). Эти варианты подойдут, если вы решили заказать футболку с принтом на груди или спине.</p>
                        <h2 dir="ltr">Прикольные футболки в подарок близким</h2>
                        <p dir="ltr">Немногие любят бегать по магазинам в предпраздничной суете и выбирать подходящие подарки. Мы предлагаем купить футболку с красочным рисунком или мотивирующей цитатой. Такая вещь порадует любимых и дополнит гардероб.</p>
                        <p dir="ltr">В каталоге представлены женские и мужские модели для детей и взрослых. Найдите фасон по вкусу: консерваторы оценят классику, любителям ярких деталей понравятся реглан и рингер, поклонники элегантности и комфорта выберут поло. Разнообразие принтов удивит даже придирчивых покупателей. Радуйте друзей и родных забавными и полезными подарками!</p>
                        <p dir="ltr">Наши товары: <a title="Одежда с притами и рисунками" href="../catalog/view/odezhda" target="_blank">одежда</a>, <a title="Футболки с надписями и рисунками" href="../catalog/group/futbolki" target="_blank">футболки</a>, <a title="Майки с надписями и рисунками" href="../catalog/group/Mayki" target="_blank">майки</a>, <a title="Толстовки с принтами и рисунками" href="../catalog/group/tolstovki" target="_blank">толстовки</a>, <a title="Свитшоты с надписями и рисунками" href="../catalog/group/sweetshoty" target="_blank">свитшоты</a>, <a title="Верхняя одежда с надписями" href="../catalog/group/verhnjaja" target="_blank">верхняя одежда</a>, <a title="Шорты с надписями и рисунками" href="../catalog/group/Shorty" target="_blank">шорты</a>, <a title="Брюки с принтами и рисунками" href="../catalog/group/Brjuki_legginsy" target="_blank">спортивные брюки</a>, <a title="Прикольная одежда для беременных" href="../catalog/group/beremennye" target="_blank">одежда для беременных</a>, <a title="Прикольное нижнее белье" href="../catalog/group/Nizhnee_belje" target="_blank">нижнее белье</a> и многое другое!</p>
                    </div>

                    <div class="span"></div>
                    <div class="span"></div>

                    <div class="span"></div>

                </div>
            </div>

@endsection
