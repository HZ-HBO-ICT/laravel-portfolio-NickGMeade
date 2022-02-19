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
//        $article = Article::latest()->get();

        $article = Article::latest()->paginate(10);

        return view('blogs.index', ['articles' => $article]);
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
        $article = Article::where('id', $id);

        return view('blogs.show', ['article' => $article->firstOrFail()
        ]);
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
        $blogPost = new Article();

        $blogPost->title = request('title');
        $blogPost->excerpt = request('excerpt');
        $blogPost->body = request('body');
        $blogPost->link = request('link');

        $blogPost->save();

        return redirect('/blog');
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
