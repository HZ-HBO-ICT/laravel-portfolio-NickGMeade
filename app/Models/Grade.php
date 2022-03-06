<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Function to accept a grade and add it to the database
     *
     * @param $result - the new grade result
     */
    public function addResult($result)
    {
        $this->lowest_passing_grade = 5.5;
        if ($result >= $this->best_grade) {
            $this->best_grade = $result;
        } else {
            return;
        }
        if ($this->best_grade >= $this->lowest_passing_grade) {
            $this->passed_at = now();
        }
        $this->save();
    }
}
