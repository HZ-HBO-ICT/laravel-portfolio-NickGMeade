<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $grades = Grade::all()
            ->sortBy('quartile'); // Sorts the table by quartile before processing
        $currentECs = 0;
        foreach ($grades as $grade) {
            if ($grade->best_grade >= $grade->lowest_passing_grade) {
                $currentECs = $currentECs + $grade->ec;
                $grade->class = 'completed';
            } elseif ($grade->best_grade != 0 && ($grade->best_grade < $grade->lowest_passing_grade)) {
                $grade->class = 'incomplete';
            } else {
                $grade->class = 'inprogress';
            }
            $grade->save();
            $previousQuartile = $grade->quartile;
        }

        $progress = ($currentECs/60)*100;

        return view('grades.index', [
            'currentECs' => $currentECs,
            'grades' => $grades,
            'progress' => $progress,
            'previousQuartile' => $previousQuartile
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        return redirect(route('grade.index'))->with('status', 'Grade Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($this->validateGrade($request));

        return redirect(route('grade.index'))->with('status', 'Grade Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect(route('grade.index'))->with('status', 'Grade Deleted');
    }

    /**
     * Validate the inputs when creating/updating the blog
     * @return void
     */
    public function validateGrade($request): array
    {
        return $request->validate([
            'quartile' => 'required',
            'course_name' => 'required',
            'test_name' => 'required',
            'ec' => 'required',
            'best_grade' => 'required'
        ]);
    }
}
