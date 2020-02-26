<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Catagory;

class Product extends Model
{
    //update 
    protected $fillable=['product_name',
    'product_quantity',
    'product_price',
    'product_discription',
    
    'product_catagory_id',

    ];

    public function relationCatagory()
    {
        return $this->hasOne('App\Catagory','id','product_catagory_id');
        //               'modelname','PK',FK'
    }


}
