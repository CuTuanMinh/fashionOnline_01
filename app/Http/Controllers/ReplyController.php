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
            $reply->save();
            return redirect()->back();
    	}
    	else{
    		return view('auth.login');
    	}
    }
}
