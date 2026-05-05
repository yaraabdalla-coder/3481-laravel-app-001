<?php

namespace Database\Seeders;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Taskseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $statuses=['pending','medium'];
    foreach($statuses as $status){
      Task::factory(5)->create([
        'status'=>$status,
      ]);
    }
}
    }

