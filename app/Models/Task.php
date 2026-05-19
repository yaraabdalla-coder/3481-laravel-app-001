<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
protected $fillable=[
    'title',
    'description',
    'status',
    'Priority',
    'due_date',
    'user_id'
];
  use HasFactory;
  public function user()
{
    return $this->belongsTo(User::class);
}

public function comments()
{
    return $this->hasMany(TaskComment::class);
}
  
}
