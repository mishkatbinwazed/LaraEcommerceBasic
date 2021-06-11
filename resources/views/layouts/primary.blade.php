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
	@yield('main_content')
	<!-- end sidebar + content area -->

	@include('partials.footer')

	@include('partials.scripts')
</body>
</html>