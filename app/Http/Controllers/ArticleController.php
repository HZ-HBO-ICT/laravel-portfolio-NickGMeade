<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Render a list of a resource
     */
    public function index()
    {
        $article = Article::latest()->paginate(10);

        return view('articles.index', ['articles' => $article]);
    }

    /**
     * Show a single resource
     *
     * @param $article - the wildcard to compare with the DBs data
     * @return \Illuminate\Contracts\Foundation\Application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View - the Post view
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Shows a view to create a new resource
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store/Persist a new resource
     */
    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));

        return redirect(route('articles.index'));
    }

    /**
     * Show a view to edit a resource
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Persist the edited resource
     */
    public function update(Article $article, Request $request)
    {
        $article->update($this->validateArticle($request));

        return redirect(route('articles.show', $article));
    }

    /**
     * Destroy/remove a resource
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('articles.index'));
    }

    /**
     * Validate the inputs when creating/updating a blog post
     *
     * @param $request
     * @return array
     */
    public function validateArticle($request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'link' => 'required'
        ]);
    }
}
