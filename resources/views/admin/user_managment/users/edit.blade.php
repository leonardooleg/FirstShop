@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование пользователя @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.user_managment.user.update', $user)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.user_managment.users.partials.form')

        </form>
            <form onsubmit=" if(confirm('Удалить?')){ return true}else{return false} " action="{{route('admin.user_managment.user.destroy', $user)}}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger float-right" type="submit" value="Удалить">
            </form>
    </div>
@endsection
