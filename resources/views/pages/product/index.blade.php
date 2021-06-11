@extends('layouts.master')

@section('main_content')

<div class="widget">
	<h3>Products</h3>

	<div class="row clearfix">
		@foreach($products as $product)

		<div class="col-md-4">
			<div class="card my-3">
				@php $i = 1; @endphp
				@foreach($product->images as $image)
				@if($i > 0)
					<img class="card-img-top" src="{{ asset('assets/images/products/'. $image->image) }}" alt="Card image cap">
				@endif
				@php $i--; @endphp
				@endforeach

			  <div class="card-body">
			    <h5 class="card-title">{{ $product->title }}</h5>
			    <p class="card-text">$ {{ $product->price }}</p>
			    <a href="#" class="btn btn-outline-dark">Add To Cart</a>
			  </div>
			</div>
		</div>

		@endforeach
	</div>						
</div>

@stop