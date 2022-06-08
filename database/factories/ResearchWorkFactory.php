<?php

namespace Database\Factories;

use App\Models\ResearchWork;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResearchWorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResearchWork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_training' => $this->faker->boolean,
            'topic' => $this->faker->text,
            'teacher_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
