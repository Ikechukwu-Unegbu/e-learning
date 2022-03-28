<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\interactions\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class DashpagesController extends Controller
{
    public function adminHome(){
        $user = User::find(Auth::user()->id);
        if (! Gate::allows('admin', $user)) {
            abort(403);
        }
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

    public function publishComment($id){
        $comments = Comment::find($id);
        $comments->mode = 'public';
        // var_dump($comments->mode);die;
        $comments->save();
        return redirect()->route('comment');
    }

    public function roles(){
        $roles = Role::paginate(12);
        return view('admin.role.index')->with('roles', $roles);
    }

    public function newrole(Request $request){
        // var_dump($request->all());die;
        $request->validate([
            'name'=>'required|string',
            'description'=>'required|string'
        ]);
        $role = new Role();
        $role->name = $request->input('name');
        $role->description = $request->input('description');
        $role->save();

        Session::flash('success', 'New Role Created.');

        return redirect()->route('role.index');
    }
}
