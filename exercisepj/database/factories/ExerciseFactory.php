<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->$faker->name,
            'email' => $this->$faker->unique()->safeEmail,
            'profile' => $this->$faker->text,
        ];
    }
}
