<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseCat;
class mainCourseController extends Controller
{
    
    
   public function index(){
       $courses =Course::all();
       $cats    =CourseCat :: all();
       return view ('mainSite/course',compact('courses','cats'));
   }
   

}

