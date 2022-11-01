@extends('layout.app')
@section('title')
    Авторизация
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Авторизация</h2>
        @if(session()->has('success'))
                 <div class="container w-25">
                      <div class="alert text-center alert-success">
                        {{session('success')}}
                    </div>
                </div>
        @endif

        @if(session()->has('error'))
                <div class="container w-25">
                    <div class="alert text-center alert-danger">
                        {{session('error')}}
                    </div>
                </div>
        @endif




        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-6" >
                <form action="" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control" id="login">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary col-12" style="background-color: #043F7E; color: #D2D2FF; border: none">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection
