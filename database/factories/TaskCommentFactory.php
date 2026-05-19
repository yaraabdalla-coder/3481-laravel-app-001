<?php

namespace Database\Factories;
use App\Models\TaskUser;
use App\Models\TaskComment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
/**
 * @extends Factory<TaskComment>
 */
class TaskCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment'=>fake()->text(),
            'Task_id'=>Task::inRandomOrder()->first()->id,
             'user_id'=>TaskUser::inRandomOrder()->first()->id,
        ];
    }
}
