@extends('layout.app')
@section('title')
    Редактирование
@endsection
@section('main')
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="row mt-5 text-center">
                <h2>Редактирование категории</h2>
            </div>
            <div class="col-6" >
                <form action="" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label"></label>
                        <input required type="text" name="title" class="form-control" id="title" value="{{$category->title}}">
                    </div>

                    <button type="submit" class="btn btn-primary col-12" style="background-color:#cfc0ff; color:#F4F1FF; border: none">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
