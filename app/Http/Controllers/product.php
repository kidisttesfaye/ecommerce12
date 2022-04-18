<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
   public function regster() 
   {
   return view('product.register');}
   public function store(request.$request){
       $product =new product();
       $product->name=$request->name;
       $product->unit=$request->unit;
       $product->price=$request->price;
       $product->quantity=$request->quantity;
       $is_suceessed=$product::save();
       if($is_successed)
       echo"record saved sucessfully";
       elseecho "some thing went wrong try again";

   }
}
