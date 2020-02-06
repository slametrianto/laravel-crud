<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use DB;
// use App\Article;

use App\Post;


class HomeController extends Controller
{
    public function index()
    {

        $articles = Post::get();

        // $articles = Article::get();
        // $articles = DB::table('articles')->get();

        // var_dump($articles);
        // dd($articles);


        // return view('home', compact('articles'));
        return view('home', ['articles' => $articles]);
    }
}
