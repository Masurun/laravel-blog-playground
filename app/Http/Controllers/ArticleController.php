<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleStoreRequest;
use App\Usecases\Article\CreateArticle;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::from('articles')->get();
        return view('article', compact('articles'));
    }

    public function store(ArticleStoreRequest $request, CreateArticle $createArticle)
    {
        // $article->create([
        //     'title' => $request->title,
        //     'category' => $request->category,
        // ]);
        $createArticle($request->title, $request->category);
        return view('complete');
    }
}
