@extends('admin.layouts.master')

@section('main_content')

<div class="card mt-4">
	<div class="card-header bg-dark text-light">
		Add Product
	</div>
	<div class="card-body">
		<form action="{{ route('admin.product.store') }}" method="post">
		  @csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Title</label>
		    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="exampleDescription">Description</label>
		    <textarea class="form-control" name="description" id="exampleDescription" cols="30" rows="5" placeholder="Description"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPrice">Price</label>
		    <input type="number" class="form-control" name="price" id="exampleInputPrice" aria-describedby="emailHelp" placeholder="Price">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputQuantity">Quantity</label>
		    <input type="number" class="form-control" name="quantity" id="exampleInputQuantity" aria-describedby="emailHelp" placeholder="Quantity">
		  </div>
		  <button type="submit" class="btn btn-dark btn-sm">Add Product</button>
		</form>
	</div>
</div>

@stop