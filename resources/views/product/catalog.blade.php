@extends('layout.app')
@section('title')
    Каталог
@endsection

@section('main')
    <div class="container">
        <h1 class="text-center mt-5">Каталог</h1>

        <div class="sort-filter d-flex justify-content-between col-5 mb-5">
            <form action="{{route('filter')}}">
                <div class="mb-3">
                    <label for="category">Фильтрация по категориям:</label>
                    <select id="category" name="category" class="form-select">
                        <option value="0">Все</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="transform: translate(94px, 0px) ; height: 33%">Применить</button>
            </form>

            <form action="{{route('sort')}}">
                <div class="mb-3">
                    <label for="parameter">Сортировка по:</label>
                    <select id="parameter" name="parameter" class="form-select">
                        <option value="">Нет</option>
                        <option value="title">Наименованию</option>
                        <option value="price">Цене</option>
                        <option value="count">Количеству</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="transform: translate(29px, 0px) ; height: 33%">Отсортировать</button>
            </form>

        </div>

        <div class="mb-3">
            <div class="products row row-cols-1 row-cols-md-3 g-5">
                @foreach($products as $key=>$product)
                    <div class="col d-flex justify-content-center">
                        <a href="#" class="card" style="text-decoration: none">
                            <img style="height: 80%" src="{{$product->img}}" alt="product" >
                            <p style="font-size: 18px; font-weight: bold; color: black; margin: 0;  " class=" text-center mt-2">{{\Illuminate\Support\Str::words($product->title, 4)}}</p>
                            <p style="font-size: 18px; font-weight: bold; color: black; margin: 0" class="text-center">{{$product->price}}</p>
                            <button type="button" class="btn btn-warning" style="transform: translate(65px, 11px); width: 63%">Подробнее</button>
                        </a>

                    </div>

                @endforeach
            </div>
        </div>


        <div class="pagination-links d-flex justify-content-center mt-5">
            {{$products->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
@endsection
