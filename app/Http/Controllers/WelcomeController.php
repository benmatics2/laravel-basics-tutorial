<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    $title="Coding Edge Technology Web Class of 2023 lists";
    $lists =[
    'CY Orim',
    'Magnus Eze',
    'Benjamin Ani',
    'Sunday Ugwu',
    'Okey Ezeocha',
    'Ijeoma Laravel',
    ];

    return view('welcome',compact('title','lists'));
    }

    public function aboutUs(){
        return view('about');
    }

    public function products(){
        $products = Product::all();
        return view('products',compact('products'));
    }
}
