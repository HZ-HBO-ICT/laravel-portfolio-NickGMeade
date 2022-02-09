<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    /**
     * Show the faq.blade.php page when called
     */
    public function show()
    {
        return view('faq');
    }
}
