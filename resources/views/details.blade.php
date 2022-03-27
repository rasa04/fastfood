@extends('layouts.layout')

@section('content')
	<img src="data:image/jpeg;base64, <?php echo base64_encode($food->photo)?>">
	<h1>{{ $food->name }}</h1>
	<h1>{{ $food->price }}$</h1>
@endsection
