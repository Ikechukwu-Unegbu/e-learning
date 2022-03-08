<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesController extends Model
{
    use HasFactory;

    public function adminHome(){
        return view('admin.home.home');
    }
}
