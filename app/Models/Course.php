<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;


    public function modules(){
        return $this->belongsToMany(Module::class, foreignPivotKey: 'courses_id');
    }

    public function users(){
        return $this->belongsToMany(User::class, foreignPivotKey: 'courses_id', relatedPivotKey: 'users_id');
    }
}
