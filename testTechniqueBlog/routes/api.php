<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', [APIController::class, 'showArticles'])->name('articles');
Route::get('/article/{article}', [APIController::class, 'showArticle'])->name('article');
