<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function getcourse(){
        return $this->belongsTo(course::class, 'id', 'course_id');
    }
}
