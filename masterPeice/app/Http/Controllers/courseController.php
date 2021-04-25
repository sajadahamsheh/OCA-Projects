<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseCat;
class courseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
   public function index(){
       $courses =Course::all();
       $cats    =CourseCat :: all();
       return view ('dashboard/course',compact('courses','cats'));
   }
   public function store(Request $req){
    $req->validate([
        'course_name'     =>'required|min:4',
        'course_price'    =>'required',
        'course_desc'     =>'required',
        'course_img'      =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'course_discount' =>'required',
        'cat_id' =>'required',
    ]);      
    if (!empty(request()->course_img)){
        $imageName = time().'.'.request()->course_img->getClientOriginalExtension();
        request()->course_img->move(public_path('images'), $imageName);
    }
    else {
        $imageName= 'default.png';
    }

    $course = new Course();
    $course ->course_name     =$req['course_name']; 
    $course ->course_price    =$req['course_price']; 
    $course ->course_desc     =$req['course_desc']; 
    $course ->course_discount =$req['course_discount']; 
    $course ->cat_id          =$req['cat_id']; 
    $course ->course_img      =$imageName;
    $course ->save();
    return redirect('/course');
   }
   public function edit($id){
       $course = Course :: find ($id);
       $cat= CourseCat:: all();
       return view ('dashboard/editcourse' ,compact('course','cat') );
   }
   public function update(Request $req ,$id ){
     if (!empty(request()->course_img)){
            $imageName = time().'.'.request()->course_img->getClientOriginalExtension();
            request()->course_img->move(public_path('images'), $imageName);
        }else {
            $courseImg=Course::find($id);
            $imageName=$courseImg->course_img;
        }  
        $course = new Course();
        $course = $course -> find($id);
        $course ->course_name     =$req['course_name']; 
        $course ->course_price    =$req['course_price']; 
        $course ->course_desc     =$req['course_desc']; 
        $course ->course_discount =$req['course_discount']; 
        $course ->cat_id          =$req['cat_id']; 
        $course ->course_img      =$imageName;
        $course ->save();
        return redirect('/course');
   }
   public function destroy($id){
       $var = Course :: destroy($id);
       return redirect('/course');
   }


}

