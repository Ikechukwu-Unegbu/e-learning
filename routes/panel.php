<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashpagesController;

Route::get('/panel', [DashpagesController::class, 'adminHome'])->name('panel')->middleware(['auth']);
Route::get('/panel/users', [DashpagesController::class, 'adminUser'])->name('panel.users')->middleware(['auth']);
