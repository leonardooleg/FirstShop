@foreach ($categories as $category)
    @if ($category->children->where('published', 1)->count())
            <a href="{{url("/category/$category->slug")}}" class="nav-link">
                {!! $delimiter ?? "" !!}{{$category->title}} <span class="caret"></span>
            </a>
            @include('layouts.leftMenuHead', ['categories' => $category->children, 'delimiter'  => ' - ' . $delimiter])
        @else
        <a href="{{url("/category/$category->slug")}}" class="nav-link">
            {!! $delimiter ?? "" !!}{{$category->title}} <span class="caret"></span>
        </a>
    @endif
@endforeach







