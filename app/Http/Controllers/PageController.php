<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function RegPage(){
        return view('user.registration');
    }

    public function AuthPage(){
        return view('user.auth');
    }

    public function AdminPage(){
        $categories = Category::all();
        return view('admin.index', ['categories'=>$categories]);
    }

    public function NewCategory(){
        return view('admin.newCategory');
    }

    public function NewProduct(){
        $categories = Category::all();
        return view('admin.product', ['categories'=>$categories]);
    }

    public function CatalogPage(){
        $products = Product::query()->paginate(3);
        $categories = Category::all();
        return view('product.catalog', ['products'=>$products, 'categories'=>$categories]);
    }
}
