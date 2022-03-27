@extends('layouts.admin')

@section('content')
	<h2>Show product</h2>
	<a href="{{ route('admin.index') }}">Back</a>
	<p>{{ $food->id }}</p>
	<p>{{ $food->name }}</p>
	<p>{{ $food->price }}</p>
	<p>{{ $food->type }}</p>
	<img width="100px" src="data:image/jpeg;base64, {{base64_encode($food->photo)}}">
@endsection