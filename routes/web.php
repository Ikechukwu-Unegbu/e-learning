<?php

use App\Http\Controllers\Courses\CrashcourseController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\interactions\CommentsController;
use App\Http\Controllers\RoutingController;

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
Route::post('/signup', [RegisteredUserController::class, 'storeSignup']);
Route::get('/free/course', [CrashcourseController::class, 'takeCourse'])->name('crash.take')->middleware(['auth']);
Route::post('/comment', [CommentsController::class, 'comment'])->name('comment')->middleware(['auth']);
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/login_', [CrashcourseController::class, 'logincreate']);


// 


/**
 * 
 *COURSE ROUTES 
 */

Route::get('/free/introduction-to-blockchain-technology/lesson_one', 
[RoutingController::class, 'intr_to_blockchain'])->name('intro.bc')->middleware(['auth']);

Route::get('free/types_of_crypto_blockchain/lesson_two', 
[RoutingController::class, 'intr_to_blockchain'])->name('types.crypto')->middleware(['auth']);

Route::get('free/meaning_of_crypto/lesson_three', 
[RoutingController::class, 'intr_to_blockchain'])->name('meaning.crypto')->middleware(['auth']);

Route::get('free/fundamental_analysis/lesson_four', 
[RoutingController::class, 'intr_to_blockchain'])->name('fundamental')->middleware(['auth']);

Route::get('free/fundamental_analysis_2/lesson_five', 
[RoutingController::class, 'intr_to_blockchain'])->name('fundamental.two')->middleware(['auth']);


Route::get('free/exchange_market/lesson_six', 
[RoutingController::class, 'intr_to_blockchain'])->name('exchange')->middleware(['auth']);


Route::get('free/centralized_exchange/lesson_seven', 
[RoutingController::class, 'intr_to_blockchain'])->name('central.exchange')->middleware(['auth']);

Route::get('free/account_setup/lesson_eight', 
[RoutingController::class, 'intr_to_blockchain'])->name('account')->middleware(['auth']);

Route::get('free/spot_trading/lesson_nine', 
[RoutingController::class, 'intr_to_blockchain'])->name('spot')->middleware(['auth']);

Route::get('free/future_trading/lesson_ten', 
[RoutingController::class, 'intr_to_blockchain'])->name('futures.intro')->middleware(['auth']);

Route::get('free/future_trading/lesson_ten', 
[RoutingController::class, 'intr_to_blockchain'])->name('futures.intro')->middleware(['auth']);

Route::get('free/future_trading_2/lesson_eleven', 
[RoutingController::class, 'intr_to_blockchain'])->name('futures')->middleware(['auth']);


Route::get('free/risk_management/lesson_twelve', 
[RoutingController::class, 'intr_to_blockchain'])->name('risk')->middleware(['auth']);

Route::get('free/decentralized_exchange/lesson_thirteen', 
[RoutingController::class, 'intr_to_blockchain'])->name('decentra')->middleware(['auth']);

// Route::get('free/decentralized_exchange/lesson_thirteen', 
// [RoutingController::class, 'intr_to_blockchain'])->name('decntra')->middleware(['auth']);

Route::get('free/decentralized_exchange/lesson_fourteen', 
[RoutingController::class, 'intr_to_blockchain'])->name('decntra2')->middleware(['auth']);

Route::get('free/how_to_use_signal/lesson_fiteen', 
[RoutingController::class, 'intr_to_blockchain'])->name('signals')->middleware(['auth']);

Route::get('free/end_note/lesson_sixteen', 
[RoutingController::class, 'intr_to_blockchain'])->name('end')->middleware(['auth']);



//Route::get('/')->name('types.bc')->middleware(['auth']);




require __DIR__.'/auth.php';
require __DIR__.'/panel.php';