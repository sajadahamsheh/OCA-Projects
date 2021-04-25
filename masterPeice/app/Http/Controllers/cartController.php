<?php

namespace App\Http\Controllers;

use App\Order;
use App\Ordercourses;
use Illuminate\Http\Request;
use App\Course ;
use App\Cart ;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;

class cartController extends Controller
{
    public function addToCart(Course $course ) {
        
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($course);
        // dd($cart);
        session()->put('cart', $cart);
        return redirect('shopping-cart')->with('success', 'course was added');
    }


    public function showCart() {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        return view('cart.show', compact('cart'));
    }


  



    public function Checkout()
    {
        if(Auth()){
        $totalPrice = 0 ;
        $totalQty   = 0 ;

        $order = new Order();
        $order -> total_price = session()->get('cart');
        dd(session()->get('cart '));
        $order -> user_id = Auth::user()->id ;
        $order -> save();

        foreach(Session::get('cart.teams') as $product){

            
            $orderProduct = new orders_product();
            $orderProduct -> quantity = $product -> qty ;
            $orderProduct -> quantity = $product -> qty ;
            $orderProduct -> order_details = $product -> pro_name ;
            $orderProduct -> product_id = $product -> id ;
            $orderProduct -> order_id = $order -> id ;
            $orderProduct -> single_price = ($product -> pro_price - ($product -> pro_discount * $product -> pro_price) /100 ) ;
            $orderProduct -> save();
        }

        Session::forget('cart.teams');
        return redirect('profile') ;

        }else{
            return redirect('login') ;
        }


        


        
    }

}


