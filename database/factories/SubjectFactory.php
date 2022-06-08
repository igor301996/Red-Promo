<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_id' => \App\Models\User::inRandomOrder()->first()->id,
            'information_about_discipline' => $this->faker->realText(200),
            'summary_topic' => $this->faker->realText(200)
        ];
    }
}
