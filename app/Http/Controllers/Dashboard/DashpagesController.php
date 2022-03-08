<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashpagesController extends Controller
{
    public function adminHome(){
        return view('admin.home.home');
    }

    public function adminUser(){

        $users = User::where('usertype', '=', 'crash')->paginate(12);
        // var_dump($user);die();
        return view('admin.users.users')->with('users', $users);
    }
}
