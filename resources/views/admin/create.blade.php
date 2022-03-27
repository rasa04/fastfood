@extends('layouts.admin')

@section('content')
	<h1>Add food</h1>
	<div class="wrapper">

		<form action="{{ route('admin.store') }}" method="POST" >
			@csrf
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

			<input type="submit" value="Add">
		</form>
	</div>	
@endsection