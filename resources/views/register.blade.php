@extends('product.app')


@section('content')


    <div class="container">
       <h1><span style="color: green">Registration Form</span> <hr></h1>
        <div class+"row">
            <div class="col-md-4 ">

                    <form method="POST" action="product/create">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="product_name">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Quantity</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="product_quantity">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Price</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="product_price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Discription</label>
                            <textarea class="form-control" id="exampleInputPassword1" name="product_discription" row="8" cols="20" placeholder="write somthing"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>


@endsection