<!DOCTYPE html>
<html>
<head>
    <title>Laravel Static Site</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header><h1>Laravel Static Site</h1></header>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/contact">Contact</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
