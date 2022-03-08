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

        $user = User::where('usertype', '=', 'crash')->paginate(12);
        return view('admin.users.users');
    }
}
