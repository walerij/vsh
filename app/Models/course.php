<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class course extends Model
{
    use Sluggable;

    protected $guarded = false;


    public function sluggable(): array
    {
        return [
            'courl' => [
                'source' => 'course'
            ]
        ];
    }


    public function getlessons(){
        return $this->hasMany(lesson::class, 'course_id', 'id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_courses', 'courses_id', 'user_id');
    }

    public function lesson()
    {
        return $this->hasMany(lesson::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
