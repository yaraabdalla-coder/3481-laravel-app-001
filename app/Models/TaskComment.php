<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskComment extends Model
{
    protected $fillable=[
        'comment',
        'Task_id',
        'User_id',
    ];
      use HasFactory;
      
public function user()
{
    return $this->belongsTo(User::class);
}

public function task()
{
    return $this->belongsTo(Task::class);
}
    
}
