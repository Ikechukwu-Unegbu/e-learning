<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Courses\Crashcourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        return view('pages.crashcourse.course');
    }
}
