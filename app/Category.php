<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamp = true;
    
    public function categoryPost()
    {
        return $this->hasMany('App\CategoryPost', 'category_id', 'id');
    }

    public function post()
    {
        return $this->belongstoMany('App\Post', 'category_posts', 'category_id', 'post_id');
    }

    public function categoryProduct()
    {
        return $this->hasMany('App\CategoryProduct', 'category_id', 'id');
    }

    public function product()
    {
        return $this->belongstoMany('App\Product','category_products','category_id','product_id');
    }
}
