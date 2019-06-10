@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование товара @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.product.update', $product)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.product.partials.form')
            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
            <form onsubmit="if(confirm('Удалить?')){ return true}else{return false}" action="{{route('admin.product.destroy', $product)}}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger float-right" type="submit" value="Удалить">
            </form>
    </div>
@endsection
