<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            return [
                'course_id' => Course::factory(),
                'test_name' => $this->faker->sentence,
                'best_grade' => $this->faker->numberBetween(0,10),
                'lowest_passing_grade' => 5.5
            ];
    }
}
