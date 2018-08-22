<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    public $timestamp = true;

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function comment()
    {
    	return $this->belongsTo('App\Comment','comment_id','id');
    }
}
