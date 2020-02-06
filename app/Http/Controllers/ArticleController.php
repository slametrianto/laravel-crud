<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Article;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles\create');
    }

    // public function store()
    // {

    //     dd(request('title'));
    // }

    // public function store(Request $request)
    // {
    //     dd($request->title);
    // }

    public function store()
    {


        // validasi

        request()->validate([
            'title' => ['required', 'min:3', 'max:191'],
            'content' => ['required'],
        ]);





        // $article = new Article;
        // $article->title = request('title');
        // $article->slug = Str::slug(request('title')) . '-' . Str::random(10);
        // $article->content = request('content');

        // $article->save();

        // $slug =  Str::slug(request('title')) . '-' . Str::random(10);

        // Article::create([
        //     'title' => request('title'),
        //     'slug' => $slug,
        //     'content' => request('content'),
        // ]);

        $attr = request()->all();
        $attr['slug'] =  Str::slug(request('title')) . '-' . Str::random(10);

        Article::create($attr);


        return back();
    }
}
