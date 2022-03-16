<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Courses\Crashcourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\interactions\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CrashcourseController extends Controller
{
    public function signup(){
        return view('pages.crashcourse.signup');
    }

    public function storeSignup(Request $request){
        $validate = $request->validate([
            'name'=>'required|string|max:24',
            'email'=>'required|string|',
            'telegram'=>'required|string'
        ]);

        $crashcourse = new Crashcourses();
        $crashcourse->name = $request->input('name');
        $crashcourse->email = $request->input('email');
        $crashcourse->telegram = $request->input('telegram');

        $crashcourse->save();

        Session::flash('success', 'Thank you for signing up');
        return redirect()->route('course');
    }

    public function takeCourse(){
        $users = User::where('usertype', '=', 'crash')->paginate(12);
        $userComments = Comment::where('user_id', '=', Auth::user()->id)->get();
        // var_dump($userComments);die();
        $publicComms = Comment::where('mode', '=', 'public')->get();
        // return view('admin.users.users')
        // var_dump($publicComms);
        // foreach($publicComms as $com){
        //     var_dump($com->id);
        // }
        // die();
        foreach($publicComms as $publicComm){
            if($publicComm->user_id === Auth::user()->id){
                $publicComm = '';
            }
        }
        return view('pages.crashcourse.course')
            ->with('userComments', $userComments)
            ->with('publicComms', $publicComms);
    }

    public function logincreate(){
        return view('pages.crashcourse.login');
    }

    
}
