<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use function Composer\Autoload\includeFile;
use App\Models\Course;

class Grade extends Model
{
    public function addResult(int $result){

        /**
         * If the bestgrade is equal to 0 or the best grade is less than the results input
         * the new value will be the result
         */
        if($this->best_grade == NULL || $this->best_grade <= $result){
            $this->best_grade = $result;
        }

        (new Course)->assignCredits();
    }

    public function implement(){
        $grade = DB::table('grades');


    }

    protected $fillable = ['course_name', 'test_name', 'best_grade'];

    use HasFactory;

    public function course(){

        return $this->hasMany(Grade::class);
    }
}
