<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseCat;
use App\topic;
class HomeController extends Controller
{
   
    public function index()
    {   
        $courses = Course :: all();
        $cats    = CourseCat ::all();
        $topics   = Topic ::all();
        return view('mainSite.home',compact('courses','cats','topics'));

    }
}
