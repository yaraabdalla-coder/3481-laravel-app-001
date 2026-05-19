<?php

namespace Database\Seeders;
use App\Models\TaskNotifications;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskNotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       TaskNotifications::factory(200)->create(); 
    }
}
