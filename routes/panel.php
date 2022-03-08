<?php 
use App\Models\Dashboard\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/panel', [PagesController::class, 'adminHome'])->name('panel');
Route::get('panel/users', [PagesController::class, ''])->name('panel.users');
