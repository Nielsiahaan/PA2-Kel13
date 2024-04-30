<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [HomeController::class, 'login'])->name('login');
Route::get('/user/index', [HomeController::class, 'index'])->name('user.index');
Route::get('user/sub_test', [HomeController::class, 'sub_test'])->name('user.sub_test');
Route::get('user/try_out', [HomeController::class, 'try_out'])->name('user.try_out');
Route::get('user/hasil', [HomeController::class, 'hasil'])->name('user.hasil');
