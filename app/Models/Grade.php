<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function addResult(int $result){

        /**
         * If the new input(result) is less than the current grade(best_grade)
         * Do nothing.
         * Elseif the new input is greater than or equal to threshold
         * override the current grade and update timestamp(passed_at)
         */
        if($result < $this->best_grade){
            $this->best_grade;
        } elseif ($result >= $this->lowest_passing_grade){
             $this->best_grade = $result;
             $this->passed_at->now();
        }
        return $result;



    }
    use HasFactory;
}
