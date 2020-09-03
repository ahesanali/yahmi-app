@extends('layouts.main_layout')
@section('content')
 	@foreach ( $book_list as $book  )
	        <li>{{ $book }}</li>
	 @endforeach
	
@endsection	 