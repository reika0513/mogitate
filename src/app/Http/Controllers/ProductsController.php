<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function register(){
        return view('register');
    }
}
