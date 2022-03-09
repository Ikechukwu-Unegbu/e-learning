<?php

namespace App\Http\Controllers\interactions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\interactions\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function comment(Request $request){
        $request->validate([
            'comment'=>'required|string|max:400'
        ]);

        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::user()->id;

        $comment->save();
        
        return redirect()->route('crash.take');
    }
}
