<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Comment;

use App\Category;

use App\Brand;

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
    	$product=Product::find($id);
        $categories = Category::all();
        $brands= Brand::all();
        $comments=Comment::where('type','product')->where('post_or_product_id',$id)->get();
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
}
