<?php

namespace App\Http\Controllers;

use App\Product;
use App\Catagory;
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
        $catagories=Catagory::all();
        
        return view('register',compact('catagories'));
    }
    public function about(){
        return view('about');
    }
    //create method as it is post route so provide request to the serve
    //insert data
    public function create(Request $request){
        //echo $request;
        //print_r($request->all());
        //return view('product.create');

        Product :: insert([
            //''=>$request->input name
            'product_name' => $request ->product_name,
            'product_catagory_id' => $request ->product_catagory_id,
            'product_quantity' => $request ->product_quantity,
            'product_price' => $request ->product_price,
            'product_discription' => $request ->product_discription,
            'created_at'          => Carbon :: now(),


        ]);
        return back();


    }
    //read data
    public function product_list(){

        $products=Product ::all();
        // echo $products;
       return view('product.list', compact('products'));  //Binding data in compact function that access to list blade


    }
    //delete data
    public function delete_product($id)
    {
        //  echo'id is '.$id;

        // return '<script type="text/javascript">alert("Do you want to delete?");</script>';
        Product::findOrfail($id)->delete();
        return back();
        

    }
    //edit/update data
        function edit_product($id)
        {

            $catagories=Catagory::all();
            $productdata=Product:: findOrfail($id);

            return view('product.editproduct', compact('productdata','id','catagories'));

        }

        public function afterupdate(Request $request)
        {
        Product::findOrfail($request->Pid)->update([

            'product_name' => $request ->product_name,
            'product_catagory_id' => $request ->product_catagory_id,
            'product_quantity' => $request ->product_quantity,
            'product_price' => $request ->product_price,
            'product_discription' => $request ->product_discription,
            // 'updated_at'          => Carbon :: now(),

        ]);
return redirect(route('product_list'));
        }






}
