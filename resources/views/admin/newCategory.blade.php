@extends('layout.app')
@section('title')
    Новая категория
@endsection
@section('main')
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="row mt-5 text-center">
                <h2>Создание категории</h2>
            </div>
            <div class="col-6" >
                <form action="" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="category" class="form-label">Новая категория</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <button type="submit" class="btn btn-primary col-12" style="background-color: #043F7E; color: #D2D2FF; border: none">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
