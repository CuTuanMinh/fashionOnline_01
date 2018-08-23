<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class BlogController extends Controller
{
    public function show($id)
    {
    	$category_single = Category::find($id);
    	$categories = Category::all();
    	return view('posts.blog-category',compact('category_single','categories'));
    }
}
