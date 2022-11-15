<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'title' => ['required', 'regex:/[А-Яа-яЁё]/u'],
            'img' => ['required', 'mimes:png,jpg,jpeg'],
            'category' => ['required'],
            'price' => ['required', 'numeric'],
            'count' => ['required', 'numeric', 'between:0,1000000'],
        ], [
            'title.required' => 'Обязательное поле для заполнения',
            'title.regex' => 'Поле содержит только кирилицу',
            'img.required' => 'Обязательное поле для заполнения',
            'img.mimes' => 'Допустимое разрешение: png,jpg,jpeg',
            'category.required' => 'Укажите категорию',
            'price.required' => 'Обязательное поле для заполнения',
            'price.numeric' => 'Поле должно быть числовым',
            'count.required' => 'Обязательное поле для заполнения',
            'count.numeric' => 'Поле должно быть числовым',
            'count.between' => 'Поле должно содержать числа от 0 до 1000000',
        ]);

        $path_img='';
        if($request->file('img')){
            $path_img=$request->file('img')->store('/public/img');
        }
        $content = new Product();
        $content->title=$request->title;
        $content->category_id=$request->category;
        $content->age=$request->age;
        $content->antagonist=$request->antagonist;
        $content->price=$request->price;
        $content->count=$request->count;

        $content->img='/storage/'.$path_img;

        $content->save();

        return redirect()->route('AdminPage');
    }

     public function filter(Request $request){

         $categories = Category::all();
         $query = Product::query();

         if($request->category && $request->category!==0){
             $query=$query->where('category_id', $request->category);
         }

         $products = $query->paginate(6)->withQueryString();

         return view('product.catalog', ['products'=>$products, 'categories'=>$categories]);

     }

     public function sort(Request $request){
        $categories = Category::all();
        $query = Product::query();

        if($request->sorted){
            $query = $query->orderBy($request->sorted);
        } else{
            $query = $query->orderBy('title');
        }
        $products = $query->paginate(6)->withQueryString();

        return view('product.catalog', ['products'=>$products, 'categories'=>$categories]);
     }

}
