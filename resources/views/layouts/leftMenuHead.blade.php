@if (count($project['children']) > 0)
    @php $child=true; @endphp
@else
    @php $child=false; @endphp
@endif

@if ($first==true and $child==false)
    <li class="list-group-item" >
        <a href="/category/{{ $project['slug'] }}" style="color: #0e0e0e">
            {{ $project['title'] }}
        </a>
    </li>
@elseif ($first==true and $child==true)
    <li class="dropdown-submenu head_left_menu">
        <a  class="" tabindex="-1" href="/category/{{ $project['slug'] }}">{{ $project['title'] }}</a>
@elseif ($first==false and $child==true)
    <li class="dropdown-submenu head_left_menu">
        <a  class="" tabindex="-1" href="/category/{{ $project['slug'] }}">{{ $project['title'] }}</a>
@else
    <li  class="head_left_menu dropdown-item "><a  class="" tabindex="-1" href="/category/{{ $project['slug'] }}">{{ $project['title'] }}</a></li>
@endif



@if ($child==true)
    <ul class="dropdown-menu  @if($first==true)multi-level @endif" role="menu" aria-labelledby="menu{{$project['id']}}">
        @php
            $first=false;
        @endphp
        @foreach($project['children'] as $project)
            @include('layouts.leftMenuHead', $project)
        @endforeach
    </ul>
    @if ($first==true and $child==true)
    </li>
@endif
@endif


