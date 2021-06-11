<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel Ecommerce Project</title>
	
	@include('partials.styles')

</head>
<body>
	<!-- Header area start -->
	@include('partials.nav')
	<!-- Header area End -->

	<!-- start sidebar + content area -->
	<div class="container">
		<div class="row clearfix">
			<!-- Start sidebar area -->
			<div class="col-md-3">
				<section class="sidebar mt-4">
					@include('partials.sidebar')
				</section>
			</div>
			<!-- End sidebar area -->

			<!-- Start main-content area -->
			<div class="col-md-9">
				<section class="main-content mt-4">
					@yield('main_content')
				</section>
			</div>
			<!-- End main-content area -->
		</div>
	</div>
	<!-- end sidebar + content area -->

	
	@include('partials.footer')

	@include('partials.scripts')
</body>
</html>