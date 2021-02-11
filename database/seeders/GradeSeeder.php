<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'course_name' =>'Program and Career Orientation',
            'test_name' =>'Assessment',
            'lowest_passing-grade' => 5.5,
            'best_grade' => 10
        ]);
    }
}
