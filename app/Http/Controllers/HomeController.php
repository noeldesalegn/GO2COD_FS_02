<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function about()
    {
        $products = Product::all();
        return view('about');
    }
    public function contact()
    {
        $products = Product::all();
        return view('contact');
    }

}
