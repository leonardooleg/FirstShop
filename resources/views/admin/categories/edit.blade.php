@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr />
                @if($category->parent_id)
                <div class="alert alert-warning" role="alert">Внимание! У этой категории есть дочерние. При удалении и переносе, дочерние категории также будут изменены/удалены вслед за родительской.</div>
                @endif


        <form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
            @csrf
            @method('PUT')

            {{-- Form include --}}
            @include('admin.categories.partials.form')

        </form>
        <form onsubmit="if(confirm('Удалить?')){ return true}else{return false}" action="{{route('admin.category.destroy', $category)}}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger float-right" type="submit" value="Удалить">
        </form>
    </div>

@endsection
