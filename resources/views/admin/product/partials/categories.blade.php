@foreach ($categories as $category)

    <option value="{{$category->id ?? ""}}"

            @isset($product->id)
            @foreach ($product->categories as $category_product)
            @if ($category->id == $category_product->id)
            selected="selected"
        @endif
        @endforeach
        @endisset

    >
        {!! $delimiter ?? "" !!}{{$category->title ?? ""}}
    </option>

    @if (count($category->children) > 0)

        @include('admin.product.partials.categories', [
          'categories' => $category->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach
