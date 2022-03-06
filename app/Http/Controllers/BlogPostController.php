<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogPostController extends Controller
{
    /**
     * @param $slug - the wildcard to compare with the DBs data
     * @return \Illuminate\Contracts\Foundation\Application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View - the Post view
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('blogs.show', ['article' => $article]);
    }
}
