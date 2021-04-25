<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseCat;
use App\Cart ;
class singelcourseController extends Controller
{
    
    
   public function index($id){
       $course =Course::find($id);
       
       return view ('mainSite/coursedetailes',compact('course'));
   }
   
   

}

