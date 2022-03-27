<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <a id="logo" href="{{route('main')}}">Fastfood</a>
        <a id="profile" href="{{route('profile')}}">Profile</a>
    </header>
    <div id="super">
        <div id="content">
        @yield('content')
        </div>
        <div id="sidebar">
            
        </div>
    </div>
    <footer>
        Copyright 2022 ©
    </footer>
</body>
</html>
