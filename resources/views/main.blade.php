<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Fastfood</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <a id="logo" href="{{route('main')}}">Fastfood</a>
        <a id="profile" href="{{route('profile')}}">Profile</a>
    </header>
    <div id="super">
        <div id="content">
			<a href="{{ route('pizza') }}">
			<div class="block">
				<img src="data:image/jpeg;base64, {{ base64_encode($pizza->photo) }}">
				<p>{{$pizza->type}}</p>
			</div>
			</a>
			<a href="{{ route('kebab') }}">
			<div class="block">
				<img src="data:image/jpeg;base64, {{ base64_encode($kebab->photo) }}">
				<p>{{$kebab->type}}</p>
			</div>
			</a>
			<a href="{{ route('sushi') }}">
			<div class="block">
				<img src="data:image/jpeg;base64, {{ base64_encode($sushi->photo) }}">
				<p>{{$sushi->type}}</p>
			</div>
			</a>
			<a href="{{ route('burgers') }}">
			<div class="block">
				<img src="data:image/jpeg;base64, {{ base64_encode($burger->photo) }}">
				<p>{{$burger->type}}</p>
			</div>
			</a>
			<a href="{{ route('drinks') }}">
			<div class="block">
				<img src="data:image/jpeg;base64, {{ base64_encode($drinks->photo) }}">
				<p>{{$drinks->type}}</p>
			</div>
			</a>
        </div>
        <div id="sidebar">
            
        </div>
    </div>
    <footer>
        Copyright 2022 ©
    </footer>
</body>
</html>
