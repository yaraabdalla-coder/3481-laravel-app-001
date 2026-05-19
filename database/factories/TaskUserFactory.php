<?php

namespace Database\Factories;

use App\Models\TaskUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TaskUser>
 */
class TaskUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => fake()->name(),

        'email' => fake()->unique()->safeEmail(),

        'password' => bcrypt('12345678'),

        'role' => fake()->randomElement(['admin', 'user']),
    ];
}
    }

