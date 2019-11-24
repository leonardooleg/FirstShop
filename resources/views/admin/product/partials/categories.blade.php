@foreach ($categories as $category)


    <label><input type="checkbox" value="{{$category->id ?? ""}}"
            @isset($product->id)
            @foreach ($product->categories as $category_product)
            @if ($category->id == $category_product->id)
            selected="selected"
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



