@extends('layouts.admin')

@section('content')
	<a href="{{ route('admin.create') }}">Add food</a>

	@if ($message = Session::get('succes'))
	<p>{{ $message }}</p>
	@endif
	<h1>Foods list</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>TYPE</th>
		</tr>
		@foreach($foods as $food)
		<tr>
			<td>{{ $food->id }}</td>
			<td>{{ $food->name }}</td>
			<td>{{ $food->price }}</td>
			<td>{{ $food->type }}</td>
			<td>	
				<form action="{{ route('admin.destroy', $food->id) }}" method="POST">
					<a href="{{ route('admin.show', $food->id) }}">Show</a>
					<a href="{{ route('admin.edit', $food->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button type='submit'>Delete</button>
				</form>
			</td>
		</tr>
		@endforeach

	</table>
	{{ $foods->links() }}
@endsection
