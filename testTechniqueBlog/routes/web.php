<?php

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


Route::get('/index', [ArticleController::class, 'index'])->name('index');
Route::get('/new', [ArticleController::class, 'displayNew'])->name('new');
Route::post('/new', [ArticleController::class, 'new']);
Route::post('/update/{article}', [ArticleController::class, 'update']);
Route::get('/update/{article}', [ArticleController::class, 'displayUpdate'])->name('update');
Route::get('/show/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/delete/{article}', [ArticleController::class, 'delete'])->name('delete');

