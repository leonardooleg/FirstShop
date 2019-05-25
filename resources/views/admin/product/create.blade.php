@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Добавление нового товара @endslot
            @slot('parent') Главная @endslot
            @slot('active') Товары @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.product.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.product.partials.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection
