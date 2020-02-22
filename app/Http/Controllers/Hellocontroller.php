<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    function home(){
        // echo "details method work.";
        return view('welcome');
    }
    function contact(){
        return view('contact');
    }
    
    function register(){
        return view('register');
    }
    //create method as it is post route so provide request to the serve 
    public function create(Request $request){
        //echo $request;
        //print_r($request->all());
        //return view('product.create');

        Product :: insert([
            //''=>$request->input name
            'product_name' => $request ->product_name,
            'product_quantity' => $request ->product_quantity,
            'product_price' => $request ->product_price,
            'product_discription' => $request ->product_discription,
            'created_at'          => Carbon :: now(),   


        ]);
        return back();
    
    }

    public function product_list(){

        $products=Product ::all();
        // echo $products;
       return view('product.list', compact('products'));  //Binding data in compact function that access to list blade

      
    }
    public function about(){
            return view('about');
    }



}
