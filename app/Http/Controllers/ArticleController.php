<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $img = null;
        // if($request->file('img')) {
            // $img = $request->file('img')->store('img', 'public');
            // $title = $request->title;
            // $subtitle = $request->subtitle;
            // $body = $request->body;
            // $img = $request->file('img')->store('img', 'public');
        //     Article::create(['title' => $request->title, 'subtitle' => $request->subtitle, 'body' => $request->body, 'img' => $request->file('img')->store('img', 'public')]);
        // }
        // else {
        //     Article::create(['title' => $request->title, 'subtitle' => $request->subtitle, 'body' => $request->body]);
        // }
        $article = Article::create(['title' => $request->title, 'subtitle' => $request->subtitle, 'body' => $request->body]);
        if($request->file('img')) {
            $article->img = $request->file('img')->store('img', 'public');
            $article->save();
        }
        return redirect()->back()->with('message', 'articolo inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // dd($article);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // dd($request->all(), $article);
        if($request->file('img')) {
            $img = $request->file('img')->store('img', 'public');
        }
        else {
            $img = $article->img;
        }
        $article->update(['title' => $request->title, 'subtitle' => $request->subtitle, 'body' => $request->body, 'img' => $img]);
        // dd($article);
        return redirect(route('article.index'))->with('message', 'articolo modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->with('message', 'articolo eliminato con successo');
    }
}
