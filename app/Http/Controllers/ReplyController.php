<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reply;

use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function reply(Request $request)
    {
    	if (Auth::check()) {
    		$reply = new Reply();
            $reply->user_id = Auth::id();
            $reply->content = $request->get('reply');
            echo $reply->content;
            $reply->comment_id = $request->get('comment_id');
            // if ($request->get('type')=='type') {
            //     $reply->type = 'product';
            //     $reply->post_or_product_id = $request->get('product_id');
            // }
            // else {
            //     $reply->type = 'post';
            //     $reply->post_or_product_id = $request->get('post_id');
            // }

            $reply->save();
            return redirect()->back();
    	}
    	else{
    		return view('auth.login');
    	}
    }
}
