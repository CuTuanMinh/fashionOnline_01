<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Comment;

use App\Category;

use App\Brand;

use App\Post;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::paginate(9);
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.product',['products'=>$products,'categories'=>$categories,'brands'=>$brands]);
    }
    public function productDetails($id)
    {
    	$product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        $comments = Comment::where('type','product')->where('post_or_product_id',$id)->paginate(3);
    	return view('product.product-details',['product'=>$product,'comments'=>$comments,'categories'=>$categories,'brands'=>$brands]);
    }

    public function categoryProduct($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.category',['category'=>$category,'categories'=>$categories,'brands'=>$brands]);
    }

    public function brandProduct($id)
    {
        $brand = Brand::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('product.brand',['brand'=>$brand,'categories'=>$categories,'brands'=>$brands]);
    }

    public function searchProduct(Request $request)
    {
        $keyword = $request->get('keyword'); 
        $categories = Category::all();
        $brands = Brand::all();
        $outputs = Product::where('name','like','%'.$keyword.'%')->orWhere('description','like','%'.$keyword.'%')->paginate(6);
        return view('search.product',['categories'=>$categories,'brands'=>$brands,'outputs'=>$outputs,'keyword'=>$keyword]);
    }

    public function searchPost(Request $request)
    {
        $keyword = $request->get('keyword');
        $categories = Category::all();
        $brands = Brand::all();
        $outputs = Post::where('title','like','%'.$keyword.'%')->orWhere('content','like','%'.$keyword.'%')->paginate(6);
        return view('search.post',['categories'=>$categories,'outputs'=>$outputs,'keyword'=>$keyword]);
    }
}
