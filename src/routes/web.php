<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


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

Route::middleware(['auth', 'no_address'])->group(function () {
  Route::get('/', [AuthController::class, 'index'])->name('index');
  Route::get('/mypage/profile', [UserController::class, 'showProfile'])->name('profile');
  Route::post('/mypage/profile', [UserController::class, 'editProfile'])->name('profile');
  Route::get('/mypage', [UserController::class, 'index'])->name('mypage');
});