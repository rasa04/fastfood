@extends('layouts.admin')

@section('content')

	<h2>Edit food</h2>

	<a href="{{ route('admin.index') }}">Back</a>

	@if($errors->any())
		<p><s>Whoops!</s> They were some problems with your input</p><br><br>
		@foreach (errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	@endif

	<form action="{{ route('admin.update', $food->id) }}" method="POST">
		@csrf
		@method('PUT')
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
		
		<label for="price">Price</label>
		<input type="text" name="price" id="price">

		<label for="photo"></label>
		<input type="file" id="photo" name="photo">

		<select name="type" id="type">
			<option value="Sushi">Sushi</option>
			<option value="Kebab">Kebab</option>
			<option value="Pizza">Pizza</option>
			<option value="Burgers">Burgers</option>
			<option value="Drinks">Drinks</option>
		</select>

		<input type="submit" value="Save">
	</form>
@endsection