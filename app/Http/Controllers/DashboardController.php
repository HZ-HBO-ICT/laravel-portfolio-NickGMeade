<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.blade.php page when called
     */
    public function show()
    {
        $grades = Grade::all();
        $currentECs = 0;
        foreach ($grades as $grade) {
            if ($grade->best_grade >= $grade->lowest_passing_grade) {
                $currentECs = $currentECs + $grade->ec;
                $grade->class = 'completed';
            }
            $previousQuartile = $grade->quartile;
        }

        $progress = ($currentECs/60)*100;

        return view('dashboard', ['currentECs' => $currentECs, 'grades' => $grades, 'progress' => $progress, 'previousQuartile' => $previousQuartile]);
    }
}
