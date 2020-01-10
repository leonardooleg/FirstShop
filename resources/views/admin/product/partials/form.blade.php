<label for=""><strong>Статус</strong></label>
<select class="form-control" name="published">
    @if (isset($product->id))
        <option value="0" @if ($product->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($product->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for=""><strong>Наименование</strong></label>
<input type="text" class="form-control" name="title" placeholder="Наименование товара" value="{{$product->title ?? ""}}" required>

<label for=""><strong>Slug (уникальное значение)</strong></label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$product->slug ?? ""}}" readonly="">

<label for=""><strong>Родительская категория</strong></label>
<div id="Tree1" class="form-control treeHTML "   onclick="getCheckedCheckBoxes()" style="height:400px; overflow:auto;">
    @include('admin.product.partials.categories', ['categories' => $categories])
</div>


<!--Ткань-->
<label for=""><strong>Наличие выбранной ткани</strong></label>
<table  class="table">
    <thead>
        <tr>
            <th scope="col">Материал</th>
            <th scope="col">Размер</th>
            <th scope="col">Цвет</th>
            <th scope="col">Добавить нет/да</th>
            <th scope="col">Сделать основным</th>
        </tr>
        </thead>
        <tbody>

    @foreach ($textiles as $textile)
            <tr id="table_textiles" class="category-{{$textile->textiles_category}}">
                <th scope="row">{{$textile->cloths ?? ""}} / {{$textile->sex ?? ""}} / {{$textile->type ?? ""}}</th>
                <td>{{$textile->size_world ?? ""}} ({{$textile->size_rus ?? ""}})</td>
                <td> {{$textile->color ?? ""}}</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" textile ="{{$textile->id ?? ""}}" class="custom-control-input" name="textileable[]" id="customSwitch{{$textile->id ?? ""}}" value="{{$textile->id ?? ""}}"  @if(isset($textileables[$textile->id]['id']))  checked @endif>
                        <label class="custom-control-label" for="customSwitch{{$textile->id ?? ""}}"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" textile ="{{$textile->id ?? ""}}" id="customRadio{{$textile->id ?? ""}}" value="{{$textile->id ?? ""}}" name="by_default" class="custom-control-input"  @if(isset($textileables[$textile->id]['by_default']))  checked @endif >
                        <label class="custom-control-label" for="customRadio{{$textile->id ?? ""}}"></label>
                    </div>
                </td>
            </tr>
    @endforeach
        </tbody>
</table>
<!--Ткань-->


<script>
        var t = document.getElementById('Tree1');
        [].forEach.call(t.querySelectorAll('fieldset'), function(eFieldset) {
            var main = [].filter.call(t.querySelectorAll('[type="checkbox"]'), function(element) {return element.parentNode.nextElementSibling === eFieldset;});
            main.forEach(function(eMain) {
                var l = [].filter.call(eFieldset.querySelectorAll('legend'), function(e) {return e.parentNode === eFieldset;});
                l.forEach(function(eL) {
                    var all = eFieldset.querySelectorAll('[type="checkbox"]');
                    eL.onclick = Razvernut;
                    eFieldset.onchange = Razvernut;
                    function Razvernut() {
                        var allChecked = eFieldset.querySelectorAll('[type="checkbox"]:checked').length;
                        eMain.checked = allChecked === all.length;
                        eMain.checked = allChecked > 0 && allChecked <= all.length;
                        if (eMain.checked  || ((eFieldset.className === '') && (allChecked === "0"))) {
                            eFieldset.className = 'razvernut';
                        } else {
                            eFieldset.className = 'razvernut';
                        }
                        getCheckedCheckBoxes();
                    }
                    eFieldset.className = 'razvernut';

                });
            });
        });

        function getCheckedCheckBoxes() {
            var selectedCheckBoxes = document.querySelectorAll('input.category_cloth:checked');
            var checkedValues = Array.from(selectedCheckBoxes).map(cb => cb.value);
            /***/
            /*очистить предедущие*/
            var st = document.querySelectorAll('[id="table_textiles"]');
            for (var i = 0; i < st.length; i++) {
                st[i].classList.remove('table-success');
                console.log('remove')
            }
            /*очистить предедущие*/
            var cat =checkedValues;
            cat=cat[0];
            cat= 'category-'+cat;
            console.log(cat);
            /***/
            /**/
            var x = document.getElementsByClassName(cat);
            var i;
            for (i = 0; i < x.length; i++)
            {
                x[i].className += ' table-success'; // WITH space added
            }
            /**/
            /*отключить поля*/
            var str = document.querySelectorAll('.custom-switch li.custom-control-input:checked');
            /*отключить поля*/

            return checkedValues;
        }
        getCheckedCheckBoxes()
</script>



<label for=""><strong>Краткое описание</strong></label>
<textarea class="form-control" id="description_short" name="description_short">{{$product->description_short ?? ""}}</textarea>

<label for=""><strong>Полное описание</strong></label>
<textarea class="form-control" id="description" name="description">{{$product->description ?? ""}}</textarea>


<hr />
<div class="card mb-12">
    <div class="row no-gutters">
        <div class="col-md-1">
            @if (isset($product->image))
                <img  class="card-img" src="{{asset('/storage/'. $product->image) }}">
            @endif
        </div>
        <div class="col-md-11">
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01"><strong>Заглавная картинка</strong></span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Добавить изображение</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr />

<label for="basic-url"><strong>Дополнительные картинки</strong></label>

@if (isset($next_images)!='')
    @foreach($next_images as $next_image)
        <div class="card mb-12 hdtuto" >
            <div class="row no-gutters">
                <div class="col-md-1">
                    @if (isset($next_image))
                        <img  class="card-img" src="{{asset('/storage/'. $next_image) }}">
                    @endif
                </div>
                <div class="col-md-11">
                    <div class="card-body">
                        <div class="clone">
                            <div class="input-group mb-3  " >
                                <div class="custom-file">
                                    <input type="file" name="next_images[]" class="custom-file-input myfrm">
                                    <label class="custom-file-label" for="inputGroupFile03">Выбирете еще файл</label>
                                </div>
                                <div class="input-group-prepend">
                                    <button class="btn  btn-danger" type="button">Удалить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
<hr />
<div class="input-group mb-3 hdtuto increment">
    <div class="custom-file">
        <input type="file" name="next_images[]" class="custom-file-input myfrm" placeholder="Выбирете файл" >
        <label class="custom-file-label"  for="inputGroupFile03">Выбирете файл</label>
    </div>
    <div class="input-group-prepend">
        <button class="btn  btn-success" type="button" >Добавить еще</button>
    </div>
</div>



<div class="clone" hidden>
    <div class="input-group mb-3 hdtuto " >
        <div class="custom-file">
            <input type="file" name="next_images[]" class="custom-file-input myfrm">
            <label class="custom-file-label" for="inputGroupFile03">Выбирете еще файл</label>
        </div>
        <div class="input-group-prepend">
            <button class="btn  btn-danger" type="button">Удалить</button>
        </div>
    </div>
</div>
<hr />

<label for=""><strong>Мета заголовок</strong></label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$product->meta_title ?? ""}}">

<label for=""><strong>Мета описание</strong></label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$product->meta_description ?? ""}}">

<label for=""><strong>Ключевые слова</strong></label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$product->meta_keyword ?? ""}}">
<hr /><hr />

<input class="btn btn-primary" type="submit" style="position: absolute;" value="Сохранить">
