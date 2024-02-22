<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Http\Request;

class NewsArticleController extends Controller
{
    public function index() {
        $articles = NewsArticle::query()->latest()->paginate(7);
        return view('news.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(NewsArticle $noutati) {
        return view('news.show', [
            "article" => $noutati
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsArticle $newsArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsArticle $newsArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsArticle $newsArticle)
    {
        //
    }
}
