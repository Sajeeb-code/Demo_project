<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Routing\Route;

use App\Http\Controllers\Hellocontroller;

Route::get('/', function () {
    return view('welcome');
    //echo "Hello,,,";
});

Route::get('/product/app', function () {
    return view('product.app');
    //echo "Hello,,,";
});


Route :: get('/home','Hellocontroller@home')->name('Home');

Route :: get('/contact','Hellocontroller@contact')->name('Contact');

Route :: get('/about','Hellocontroller@about')->name('About');

Route :: get('/register','Hellocontroller@register')->name('Register');

Route :: post('/product/create','Hellocontroller@create')->name('product_create'); //pass data to the DB

Route :: get('/product/list','Hellocontroller@product_list')->name('product_list');


// Route :: get('/about',function(){
//     echo "Name: "."Sajeeb Prodhan"."<br>";
//     echo "Address: "."Uttara Dhaka-1230"."<br>";
//     echo "Institute: "."IUBAT (BCSE)"."<br>";
//     echo "Phone: "."01751307675"."<br>";
// });

