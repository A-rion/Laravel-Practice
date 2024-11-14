<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<job>
 */
class jobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => fake()->numberBetween(100000, 1000000)
        ];
    }
}
