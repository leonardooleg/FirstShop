@foreach ($categories as $category)

    @php
        if($category->cloth == 1) $category_cloth='category_cloth';
        else $category_cloth='';
    @endphp
    <label><input type="checkbox" name="categories[]" value="{{$category->id ?? ""}}" class="{{$category_cloth ?? ""}}"
        @isset($product->id)
            @foreach ($product->categories as $category_product)
                @if ($category->id == $category_product->id)
        checked="checked"
                @endif
            @endforeach
        @endisset

        > {{$category->title ?? ""}}</label>



    @if (count($category->children) > 0)
        <fieldset><legend></legend>
        @include('admin.product.partials.categories', [
          'categories' => $category->children,

        ])
        </fieldset>
    @endif
@endforeach



