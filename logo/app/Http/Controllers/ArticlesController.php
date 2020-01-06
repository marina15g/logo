<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;

class ArticlesController extends Controller
{
    public function create(Request $request ){
        $article = New articles();
        $article->title=$request->title;
        $article->content=$request->content;
        $article->save();
    }
}
