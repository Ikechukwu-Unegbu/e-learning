<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\interactions\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoutingController extends Controller
{
    public function intr_to_blockchain(Request $request){
        $path = explode('/',$request->path());
        $blade = end($path);
        // var_dump($blade);die();

        $users = User::where('usertype', '=', 'crash')->paginate(12);
        $userComments = Comment::where('user_id', '=', Auth::user()->id)->get();
        // var_dump($userComments);die();
        $publicComms = Comment::where('mode', '=', 'public')->get();
      
        foreach($publicComms as $publicComm){
            if($publicComm->user_id === Auth::user()->id){
                $publicComm = '';
            }
        }
        return view('pages.crashcourse/'.$blade)
            ->with('userComments', $userComments)
            ->with('publicComms', $publicComms);
    }


}
