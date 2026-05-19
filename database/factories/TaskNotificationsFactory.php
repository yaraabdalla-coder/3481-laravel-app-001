<?php

namespace Database\Factories;
use App\Models\TaskUser;
use App\Models\TaskNotifications;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TaskNotifications>
 */
class TaskNotificationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'message'=>fake()->text(),
             'TaskUser_id'=>TaskUser::inRandomOrder()->first()->id,
        ];
    }
}
