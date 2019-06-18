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
<select class="form-control" name="categories[]" multiple="">
    @include('admin.product.partials.categories', ['categories' => $categories])
</select>

<label for=""><strong>Краткое описание</strong></label>
<textarea class="form-control" id="description_short" name="description_short">{{$product->description_short ?? ""}}</textarea>

<label for=""><strong>Полное описание</strong></label>
<textarea class="form-control" id="description" name="description">{{$product->description ?? ""}}</textarea>


<hr />
<div class="card mb-12" >
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

@if ($next_images!='')
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
