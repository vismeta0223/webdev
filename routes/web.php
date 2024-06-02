<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
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
    return view('index');
})->name('home');

Route::get('/alcohol', function () {
    return view('page');
});

Route::get('/signin', [AuthManager::class,'login'])->name('login');
Route::post('/signin', [AuthManager::class,'loginPost'])->name('login.post');
Route::get('/signup', [AuthManager::class,'register'])->name('register');
