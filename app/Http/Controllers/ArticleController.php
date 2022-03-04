<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController extends Controller
{
    /**
     * Render a list of a resource
     */
    public function index()
    {
        $article = Article::latest()->paginate(10);

        return view('blogs.index', ['articles' => $article]);
    }

    /**
     * Show a single resource
     *
     * @param $article - the wildcard to compare with the DBs data
     * @return \Illuminate\Contracts\Foundation\Application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View - the Post view
     */
    public function show(Article $blog)
    {
        return view('blogs.show', ['article' => $blog]);
    }

    /**
     * Shows a view to create a new resource
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store/Persist a new resource
     */
    public function store()
    {
        Article::create($this->validateArticle());

        return redirect('/blog');
    }

    /**
     * Show a view to edit a resource
     */
    public function edit(Article $blog)
    {
        return view('blogs.edit', ['article' => $blog]);
    }

    /**
     * Persist the edited resource
     */
    public function update(Article $blog)
    {
        $blog->update($this->validateArticle());

        return redirect('/blogs/' . $blog->id);
    }

    /**
     * Destroy/remove a resource
     */
    public function destroy(Article $blog)
    {
        $blog->delete();

        return redirect('/blog');
    }

    /**
     * Validate the inputs when creating/updating a blog post
     *
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'link' => 'required'
        ]);
    }
}
