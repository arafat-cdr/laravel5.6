<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<!-- loading css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- end loading css -->

<!-- push extra css using stack start -->
@stack('css')
<!-- push extra css using stack start -->

</head>
<body>
	<div class="container">

		<h3>This is inside layout/master</h3>

		@yield('content')
		
	</div>

<!-- loading js  -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


<!-- loading js end -->

<!-- push extra js using stack -->

@stack('js')

<!-- push extra js using stack -->

</body>
</html>