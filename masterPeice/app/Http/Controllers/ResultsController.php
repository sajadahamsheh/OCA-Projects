<?php

namespace App\Http\Controllers;

use Auth;
use App\Test;
use App\TestAnswer;
use App\order_courses;
use App\Courses;
use Illuminate\Http\Request;
use App\Http\Requests\StoreResultsRequest;
use App\Http\Requests\UpdateResultsRequest;

class ResultsController extends Controller
{
   

    /**
     * Display a listing of Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order_courses::all();
        $courses = Courses::all();
        // dd($orders);
        // $products = $products::where('order_id' , $id) -> get() ;

        $results = Test::all()->load('user');
        
        return view('results.index', compact('results','orders','courses'));
    }

    /**
     * Display Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);

        if ($test) {
            $results = TestAnswer::where('test_id', $id)
                ->with('question')
                ->with('question.options')
                ->get()
            ;
        }

        return view('results.show', compact('test', 'results'));
    }
}
