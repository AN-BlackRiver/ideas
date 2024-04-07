@extends('layout.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form mt-5" action="{{route('register')}}" method="post">
            @csrf
            <h3 class="text-center text-dark">Регистрация</h3>
            <div class="form-group">
                <label for="name" class="text-dark">Имя:</label><br>
                <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror">
                @error('name')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group mt-3">
                <label for="email" class="text-dark">Email:</label><br>
                <input value="{{old('email')}}" type="text" name="email" id="email" class="form-control @error('email')is-invalid @enderror">
                @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group mt-3">
                <label for="password" class="text-dark">Пароль:</label><br>
                <input type="password" name="password" id="password" class="form-control @error('password')is-invalid @enderror">
                @error('password')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="form-group mt-3">
                <label for="confirm-password" class="text-dark">Повторите пароль:</label><br>
                <input type="password" name="password_confirmation" id="confirm-password" class="form-control @error('password')is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-dark"></label><br>
                <input type="submit" name="submit" class="btn btn-dark btn-md" value="Зарегистрироваться">
            </div>
            <div class="text-right mt-2">
                <a href="{{route('login')}}" class="text-dark">Войти</a>
            </div>
        </form>
    </div>
</div>
@endsection
