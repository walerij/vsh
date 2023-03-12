<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function getlessons(){
        return $this->hasMany(lesson::class, 'course_id', 'id');
    }
    public function users(){
        return $this->belongsToMany(User::class, 'user_courses', 'courses_id', 'user_id');
    }
}
