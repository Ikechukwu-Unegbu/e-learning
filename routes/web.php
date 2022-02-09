<?php

use App\Http\Controllers\Courses\CrashcourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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



Route::get('/crashcours/signup', [CrashcourseController::class, 'signup'])->name('crash.signup');
Route::get('/free/crypto_crashcourse', [CrashcourseController::class, 'takeCourse'])->name('crash.take');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
