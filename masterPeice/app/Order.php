<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Courses()
    {
        return $this->belongsToMany('App\Courses');
    }

}
