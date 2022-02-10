<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Show the faq.blade.php page when called
     */
    public function show()
    {
        $posts = Faq::all();

        // dd($posts);

        return view('faq', [
            'posts' => $posts
        ]);
    }
}
