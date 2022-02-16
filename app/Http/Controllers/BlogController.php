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
        $article = Article::latest()->get();

        return view('blog', ['articles' => $article]);
    }

    /**
     * Show a single resource
     *
     * @param $slug - the wildcard to compare with the DBs data
     * @return \Illuminate\Contracts\Foundation\Application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View - the Post view
     */
    public function show($id)
    {
        $article = Article::where('link', $id);

        return view('blogs.show', ['article' => $article->firstOrFail()
        ]);
    }

    /**
     * Shows a view to create a new resource
     */
    public function create()
    {
        //
    }

    /**
     * Store/Persist a new resource
     */
    public function store()
    {
        //
    }

    /**
     * Show a view to edit a resource
     */
    public function edit()
    {
        //
    }

    /**
     * Persist the edited resource
     */
    public function update()
    {
        //
    }

    /**
     * Destroy/remove a resource
     */
    public function destroy()
    {
        //
    }
}
