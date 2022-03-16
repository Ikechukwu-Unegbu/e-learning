<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashpagesController;

Route::get('/panel', [DashpagesController::class, 'adminHome'])->name('panel')->middleware(['auth']);
Route::get('/panel/users', [DashpagesController::class, 'adminUser'])->name('panel.users')->middleware(['auth']);
Route::get('/panel/users/comments', [DashpagesController::class, 'adminComments'])->middleware(['auth'])->name('comment');
Route::get('/panel/comments/publish/{id}', [DashpagesController::class, 'publishComment'])->name('comment.publish')->middleware(['auth']);


Route::get('/panel/role', [DashpagesController::class, 'roles'])->name('role.index');
Route::post('/role', [DashpagesController::class, 'newrole']);