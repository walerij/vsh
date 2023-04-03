<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class course extends Model
{
    use Sluggable;
    protected $fillable = ['course', 'info', 'category_id', 'img'];
    protected $guarded = false;


    public function sluggable(): array
    {
        return [
            'courl' => [
                'source' => 'course'
            ]
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
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


    public static function uploadImage(Request $request,$image = null)
    {
        if ($request->hasFile('img')) {
            if($image){
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('img')->store("images/{$folder}");
        }
        return null;
    }
    public function getImage()
    {
        if($this->img){
            return asset('no-image.png');
        }
        return asset("uploads/{$this->thumbnail}");
    }
}
