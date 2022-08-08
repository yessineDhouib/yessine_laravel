@extends('master')
@section("content")
<div class="container">
 <div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src="{{$product['gallery']}}" alt=""><br>
       
    </div>
    <div class="col-sm-6">

<h1>{{$product['name']}}</h1>
<h3>Price:{{$product['price']}}</h3>
<h3>details:<h5>{{$product['description']}}</h5></h3>
<h3>category:<h5>{{$product['category']}}</h5></h3>
<br>
<form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{$product['id']}}">
<button class="btn btn-primary">add to carte</button>
</from>
<button class="btn btn-success">buy now</button>
<br><br>
   <center><a href="/">Go Back</a></center>
  </div>
  </div>

</div>
@endsection
         





