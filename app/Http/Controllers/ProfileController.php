<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    /**
     * Show the profile.blade.php page when called
     */
    public function show()
    {
        return view('profile');
    }
}
