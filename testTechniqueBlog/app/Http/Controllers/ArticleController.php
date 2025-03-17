<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleFormRequest;
use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class articleController extends Controller
{

    public function index()
    {

        $articles = Article::all();

        return view('index', ['articles'=> $articles]);
    }
    public function displayNew(){
    $article=new Article();
        return view('create',[
            'article'=>$article
        ]);
    }
    public function new(ArticleFormRequest $request)
    {
        $article = Article::create($request->validated());
        return redirect()->route('index');
    }

    public function displayUpdate(Article $article){

        return view('update',[
            'article'=>$article
        ]);
    }

    public function update( ArticleFormRequest $request,Article $article){
        $article->update($request->validated());
        return redirect()->route('index');
    }

    public function show(Article $article){
        return view('show',[
            'article'=>$article
        ]);
    }

    public function delete(Article $article){
        $article->delete();
        return redirect()->route('index');
    }
}
