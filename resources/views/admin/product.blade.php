@extends('layout.app')
@section('title')
    Товар
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Добавление товара</h2>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-6" >
                <form action="{{route('createProduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="title" class="form-label">Название</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Изображение</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Дата публикации</label>
                        <input type="date" name="age" class="form-control" id="age">
                    </div>
                    <div class="mb-3">
                        <label for="antagonist" class="form-label">Антагонист</label>
                        <input type="text" name="antagonist" class="form-control" id="antagonist">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="count" class="form-label">Количество</label>
                        <input type="number" name="count" class="form-control" id="count">
                    </div>



                    <button type="submit" class="btn btn-primary col-12" style="background-color: #043F7E; color: #D2D2FF; border: none">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
