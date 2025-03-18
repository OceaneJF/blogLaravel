<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\articleController;
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
    return view('home');
})->name('home');

Route::get('/register',  [AuthController::class, 'showRegistrationForm'] )->name('register');
Route::get('/login',  [AuthController::class, 'showLoginForm'] )->name('login');
Route::post('/register',  [AuthController::class, 'register'] );
Route::post('/login',  [AuthController::class, 'login'] );
Route::get('/logout',  [AuthController::class, 'logout'] )->name('logout')->middleware('auth');

Route::get('/index', [ArticleController::class, 'index'])->name('index');
Route::get('/new', [ArticleController::class, 'displayNew'])->name('new')->middleware('auth');
Route::post('/new', [ArticleController::class, 'new'])->middleware('auth');
Route::post('/update/{article}', [ArticleController::class, 'update'])->middleware('auth');
Route::get('/update/{article}', [ArticleController::class, 'displayUpdate'])->name('update')->middleware('auth');
Route::get('/show/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/delete/{article}', [ArticleController::class, 'delete'])->name('delete')->middleware('auth');

