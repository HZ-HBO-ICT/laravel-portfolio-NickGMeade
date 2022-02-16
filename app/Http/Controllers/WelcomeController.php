<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class WelcomeController extends Controller
{
    /**
     * Show the welcome.blade.php page when called
     */
    public function show()
    {
        return view('welcome', [
            'articles' => Article::take(3)->latest()->get()
        ]);
    }
}
