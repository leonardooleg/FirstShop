@foreach ($categories as $category)
    @if ($category->children->where('published', 1)->count())
        <li class="list-group-item "  style="padding: 0.75rem 0.25rem">
            <a href="{{url("/category/$category->slug")}}" style="color: #0e0e0e">
                {!! $delimiter ?? "" !!}{{$category->title}} <span class="caret"></span>
            </a>
        </li>
            @include('layouts.leftMenuHead', ['categories' => $category->children, 'delimiter'  => ' - ' . $delimiter])
        @else
        <li class="list-group-item " style="padding: 0.75rem 0.25rem">
        <a href="{{url("/category/$category->slug")}}"  style="color: #0e0e0e">
            {!! $delimiter ?? "" !!}{{$category->title}} <span class="caret"></span>
        </a>
        </li>
    @endif
@endforeach







