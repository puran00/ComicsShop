<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){
        $category = new Category();
        $category->title=$request->title;

        $category->save();

        return redirect()->route('AdminPage');
    }

    public function edit(Category $category){
        return view('admin.editCategory', ['category'=>$category]);
    }


    public function update(Request $request, Category $category){
        $category->title=$request->title;
        $category->update();

        return redirect()->route('AdminPage');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->back();
    }
}
