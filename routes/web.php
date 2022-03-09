<?php

use App\Http\Controllers\Courses\CrashcourseController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\interactions\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/signup', [CrashcourseController::class, 'signup'])->name('crash.signup');
Route::post('/signup', [RegisteredUserController::class, 'store']);
Route::get('/free/course', [CrashcourseController::class, 'takeCourse'])->name('crash.take');
Route::post('/comment', [CommentsController::class, 'comment'])->name('comment')->middleware(['auth']);
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/login_', [CrashcourseController::class, 'logincreate']);

require __DIR__.'/auth.php';
require __DIR__.'/panel.php';