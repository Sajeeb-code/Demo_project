
 @extends('product.app')


@section('content')
<form action="/product/catagory_create" method="POST">
    @csrf
    <h2>Add Product catagory</h2>
    <div class="col-md-4">         
        <div class="form-group">
                    <label for="productcatagory">Product catagory</label>
                    <input type="text" class="form-control" id="productcatagory" name="product_catagory" Required>
        </div>
     </div>   
     <button type="submit" class="btn btn-primary"> Submit</button>
<hr>
<div class="container">
        <div class="row">
            <div class="col-md-4">


            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Category</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($catagories as $catagory)
                    <tr>
                    <th scope="row">{{ $catagory->id }}</th>

                    <td>{{ $catagory->product_catagory }}        </td>
                    

                    </tr>
                    @endforeach


                </tbody>
                </table>

            </div>
        </div>
     </div>


    
</form>

@endsection