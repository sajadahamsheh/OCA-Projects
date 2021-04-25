<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCat extends Model
{
    protected $table = "course_category";
    public function Course()
    {
        return $this->hasMany(Course::class) ;
    }
}
