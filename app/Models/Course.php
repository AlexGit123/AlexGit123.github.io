<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function grade(){

        return $this->belongsTo(Course::class);
    }

    /**
     * If the result is higher than the lowestpassinggrade then insert the value and the time the value
     * was considered a passing grade
     */
    public function assignCredits(){


        if($this->best_grade >= $this->lowest_passing_grade){
            $this->passed_at = now();
        }

        $this->save();
    }
}
