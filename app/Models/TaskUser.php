<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
     protected $fillable=[
'id',
'name',
'email',
'password',
'role',
     ];
       use HasFactory;
 public function tasks()
{
    return $this->hasMany(Task::class);
}

public function comments()
{
    return $this->hasMany(TaskComment::class);
}


public function Notifications()
{
    return $this->hasMany(TaskNotifications::class);
}


}
