@extends('layout.app')
@section('title')
    Админка
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Админ панель</h2>
        </div>
        <table class="table">
            <thead>
            <tr style="background-color: #043F7E; color: #D2D2FF;">
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                <a href="" class="btn btn-secondary col-12">Редактировать</a>
                            </div>
                            <div class="col-6">
                                <form action="" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger col-12">Удалить</button>
                                </form>
                            </div>
                        </div>

                    </td>

                </tr>




            </tbody>
        </table>



    </div>
@endsection
