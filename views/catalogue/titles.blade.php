@extends('layouts.main_layout')
@section('content')
	<h2>Title List</h2>
	<p>Hello, {{ $name }}.</p>
	
	<p>Appliction directory:{{ config('app.php','app_dir') }}</p>

	 @foreach ( $products as $product  )
	        <li>{{ $product['product_name'] }}</li>
	 @endforeach
	 @foreach ( $price_list as $key=>$price_list_entry  )
	        <li>{{ $price_list_entry }}</li>
	 @endforeach
	 <form action="{{route('catalogue.post-add-title')}}" method="POST">
	 	Name: <input type="text" name="first_name">
	 	<input type="submit">
	 </form>
@endsection	 