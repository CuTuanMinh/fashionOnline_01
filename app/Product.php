<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamp = true;
    
    public function comment()
    {
        return $this->morphMany('App\Comment', 'object');
    }

    public function order()
    {
        return $this->belongstoMany('App\Order', 'order_id', 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }

     public function categoryProduct()
    {
        return $this->hasMany('App\CategoryProduct', 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongstoMany('App\Category','category_products','product_id','category_id');
    }
}
