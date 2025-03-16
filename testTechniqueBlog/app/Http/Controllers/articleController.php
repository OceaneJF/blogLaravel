<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class articleController extends Controller
{
    public function new(Request $request)
    {
        Log::info(json_encode($request->all()));
        return view('createArticle');
    }
}
