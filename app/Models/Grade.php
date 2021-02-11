<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Grade extends Model
{
    public function addResult(int $result){

    /**
    * If the bestgrade is equal to 0 or the best grade is less than the result input
    * the new value will be the result
    */
    if($this->best_grade == NULL || $this->best_grade <= $result){
        $this->best_grade = $result;
    }

    /**
    * If the result is higher than the lowestpassinggrade then insert the value and the time the value
    * was considered a passing grade
    */
    if($this->best_grade >= $this->lowest_passing_grade){
        $this->passed_at = now();
    }

$this->save();

    }

    public function implement(){
        $grade = DB::table('grades');


    }

    use HasFactory;
}
