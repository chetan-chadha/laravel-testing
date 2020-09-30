<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // find all the articles
        $article = Article::all();

        return view('articles', ['article' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // check user is logged in
        if (Auth::check()) {
            // The user is logged in...
            return view('articles.create');
        }

        return redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article = new Article();
        $article->user_id = auth()->user()->id;
        $article->title = request('title');
        $article->body = request('body');
        $article->completed = 0;
        $article->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        //
        $article = Article::findOrFail($article);

        return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Article      $article
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
