@extends('product.app')


@section('content')


    <div class="container">
       <h1><span style="color: green">Edit/Update </span> <hr></h1>
        <div class+"row">
            <div class="col-md-4 ">

                    <form method="POST" action="/product/update">
                        @csrf
                        <input type="hidden" value="{{ $id }}" name="Pid">

                        <div class="form-group">

                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="product_name" value="{{ $productdata->product_name }}" Required >

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Product Category</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="product_catagory_id">
                            @foreach($catagories as $catagory)
                            <option value="{{$catagory->id}}">{{$catagory->product_catagory}}</option>
                            
                            @endforeach
                            
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Quantity</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="product_quantity" value="{{ $productdata->product_quantity }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Price</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="product_price" value="{{ $productdata->product_price }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Discription</label>
                            <textarea class="form-control" id="exampleInputPassword1" name="product_discription" row="8" cols="20" placeholder="write somthing">{{ $productdata->product_discription }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Here</button>
                </form>


            </div>
        </div>
    </div>


@endsection
