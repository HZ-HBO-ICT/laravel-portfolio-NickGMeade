<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    /**
     * Show the blog.blade.php page when called
     */
    public function show()
    {
        return view('blog');
    }
}
