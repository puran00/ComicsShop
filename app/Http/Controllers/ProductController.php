<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request){
//        $request->validate([
//            'title' => ['required', 'regex:/[А-Яа-яЁё]/u'],
//            'img' => ['required', 'mimes:png,jpg,jpeg','size:5'],
//            'price' => ['required', 'numeric'],
//            'count' => ['required', 'numeric', 'between:0,1000000'],
//        ], [
//            'title.required' => 'Обязательное поле для заполнения',
//            'title.regex' => 'Поле содержит только кирилицу',
//            'img.required' => 'Обязательное поле для заполнения',
//            'img.mimes' => 'Допустимое разрешение: png,jpg,jpeg',
//            'price.required' => 'Обязательное поле для заполнения',
//            'price.numeric' => 'Поле должно быть числовым',
//            'count.required' => 'Обязательное поле для заполнения',
//            'count.numeric' => 'Поле должно быть числовым',
//            'count.between' => 'Поле должно содержать числа от 0 до 1000000',
//        ]);

        $path_img='';
        if($request->file('img')){
            $path_img=$request->file('img')->store('/public/img');
        }
        $content = new Product();
        $content->title=$request->title;
        $content->category_id=$request->category_id;
        $content->age=$request->age;
        $content->antagonist=$request->antagonist;
        $content->price=$request->price;
        $content->count=$request->count;

        $content->img='/storage/'.$path_img;

        $content->save();

        return redirect()->route('AdminPage');
    }

}
