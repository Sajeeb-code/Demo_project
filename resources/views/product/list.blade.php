@extends('product.app')

@section('content')

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quentity</th>
      <th scope="col">Price</th>
      <th scope="col">discription</th>
      <th scope="col">Create At</th>
      <th scope="col">Update </th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
    
      <td>{{ $product->product_name }}        </td>
      <td>{{ $product->product_quantity }}    </td>
      <td>{{ $product->product_price }}       </td>
      <td>{{ $product->product_discription }} </td>
      <td>{{ $product->created_at }}          </td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>
<!-- {{  $products }} -->



@endsection