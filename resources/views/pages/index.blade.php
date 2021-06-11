@extends('layouts.master')

@section('main_content')

<div class="widget">
<h3>Featrured Products</h3>

<div class="row clearfix">
	<div class="col-md-4">
		<div class="card my-3">
		  <img class="card-img-top" src="{{ asset('assets/images/resizedImage.png') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Pink Shoe</h5>
		    <p class="card-text">$ 300</p>
		    <a href="#" class="btn btn-outline-dark">Add To Cart</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card my-3">
		  <img class="card-img-top" src="{{ asset('assets/images/resizedImage.png') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Pink Shoe</h5>
		    <p class="card-text">$ 300</p>
		    <a href="#" class="btn btn-outline-dark">Add To Cart</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card my-3">
		  <img class="card-img-top" src="{{ asset('assets/images/resizedImage.png') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Pink Shoe</h5>
		    <p class="card-text">$ 300</p>
		    <a href="#" class="btn btn-outline-dark">Add To Cart</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card my-3">
		  <img class="card-img-top" src="{{ asset('assets/images/resizedImage.png') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Pink Shoe</h5>
		    <p class="card-text">$ 300</p>
		    <a href="#" class="btn btn-outline-dark">Add To Cart</a>
		  </div>
		</div>
	</div>
</div>						
</div>

@stop