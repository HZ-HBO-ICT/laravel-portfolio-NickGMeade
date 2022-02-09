<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the welcome.blade.php page when called
     */
    public function show()
    {
        return view('welcome');
    }
}
