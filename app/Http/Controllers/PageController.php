<?php

namespace App\Http\Controllers;

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
        return view('admin.index');
    }

    public function NewCategory(){
        return view('admin.newCategory');
    }
}
