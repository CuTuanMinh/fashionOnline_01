<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

use App\Brand;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(9);
        $categories = Category::all();
        $brands = Brand::all();
        return view('home',['products'=>$products,'categories'=>$categories,'brands'=>$brands]);
    }
}
