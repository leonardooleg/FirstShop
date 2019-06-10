@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<label for=""><strong>Имя</strong></label>
<input type="text" class="form-control" name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required>

<label for=""><strong>Email</strong></label>
<input type="email" class="form-control" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required>

<label for=""><strong>Пароль</strong></label>
<input type="password" class="form-control" name="password">
<label for=""><strong>Пароль еще раз</strong></label>
<input type="password" class="form-control" name="password_confirmation">
<hr /><hr />

<input class="btn btn-primary" type="submit" style="position: absolute;" value="Сохранить">
