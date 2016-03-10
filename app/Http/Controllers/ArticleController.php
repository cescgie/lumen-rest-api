<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArticleController extends Controller{


    public function getArticles()
    {
        $articles  = Article::all();
        return response()->json($articles);
    }

    public function getArticle($id)
    {
        $article  = Article::find($id);
        return response()->json($article);
    }

    public function saveArticle(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article);
    }

    public function deleteArticle($id)
    {
        $article  = Article::find($id);
        $article->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function updateArticle(Request $request, $id)
    {
        $article  = Article::find($id);
        $article->article_name = $request->input('article_name');
        $article->article_description = $request->input('article_description');
        $article->save();
        return response()->json($article);
    }

}
