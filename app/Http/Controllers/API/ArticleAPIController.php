<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ArticleMail;
use App\Jobs\VeryLongJob;   

class ArticleAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(5);
        return response()->json($articles, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        //Gate::authorize('create', [self::class]);
        // return view('articles/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'datePublic' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        $article=new Article;
        $article->datePublic = $request->datePublic;
        $article->title = $request->title;
        $article->shortDesc = $request->shortDesc;
        $article->desc = $request->desc;
        $result = $article->save();
        if($result) {
            VeryLongJob::dispatch($article);
        }
        return response()->json($result, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return response()->json($article, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return response()->json($article, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'datePublic' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        $article->datePublic = $request->datePublic;
        $article->title = $request->title;
        $article->shortDesc = $request->shortDesc;
        $article->desc = $request->desc;
        $result = $article->save();
        return response()->json($result, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        return response()->json($article->delete(), 201);
    }
}
