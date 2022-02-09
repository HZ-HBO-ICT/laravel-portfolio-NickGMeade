<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.blade.php page when called
     */
    public function show()
    {
        return view('dashboard');
    }
}
