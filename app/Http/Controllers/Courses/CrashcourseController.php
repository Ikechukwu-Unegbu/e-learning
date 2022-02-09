<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrashcourseController extends Controller
{
    public function signup(){
        return view('pages.crashcourse.signup');
    }
}
