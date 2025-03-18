<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function showArticles()
    {
        return Article::all();
    }

    public function showArticle(Article $article)
    {
        return $article;
    }
}
