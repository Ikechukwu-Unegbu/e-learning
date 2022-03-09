<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\interactions\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashpagesController extends Controller
{
    public function adminHome(){
        return view('admin.home.home');
    }

    public function adminUser(){

        $users = User::where('usertype', '=', 'crash')->paginate(12);
        $userComments = Comment::where('user_id', '=', Auth::user()->id)->first();
        $publicComms = Comment::where('mode' , '=', 'public')->get();
        return view('admin.users.users')
        ->with('users', $users)
        ->with('userComments', '=', $userComments)
        ->with('publicComms', '=', $publicComms);
    }

    public function adminComments(){
        $comments = Comment::paginate(13);
        return view('admin.interaction.comments')
                ->with('comments', $comments);
    }
}
