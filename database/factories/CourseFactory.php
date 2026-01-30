<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'length' => fake()->numberBetween(1, 5),
            'mode' => fake()->randomElement(['full time', 'part time']),
            'offer' => 'AAA',
            'start' => fake()->randomElement(['january', 'september']),
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit,"
                . "sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"
                . "quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                . "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                . "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ];
    }
}
