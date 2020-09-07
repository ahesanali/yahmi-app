<!DOCTYPE html>
<html>
<head>
	<title>YAHMI Application template</title>
</head>
<body>
	<h1>YAHMI application boiler plate</h1>
	
	@include('partials.header')

	<p>Use YAHMI application development framework and enjoy the eco system.</p>
	<div class="container">
            @yield('content')
    </div>
</body>
</html>

