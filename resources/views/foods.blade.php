@extends('layouts.layout')

@section('content')

@foreach($foods as $food)
	<a href="{{ route('details', [$productname = "$food->name"]) }}">
	<div class="block">
		<img src="data:image/jpeg;base64, {{base64_encode($food->photo)}}">
		<p> {{$food->name}} </p>
		<p> {{$food->price}}$ </p>
	</div>
	</a>
@endforeach

@endsection