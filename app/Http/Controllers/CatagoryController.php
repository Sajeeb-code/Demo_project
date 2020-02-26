<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;

class CatagoryController extends Controller
{
    

    public function catagory()
    {
        $catagories=Catagory::all();
        return view('product.catagory',compact('catagories'));
    }

    public function catagory_create(Request $request)
    {
        Catagory :: insert([

            'product_catagory'=>$request->product_catagory,
        ]);

        return back();
    }
    public function retrive_cata()
    {
       
    }
   

}
