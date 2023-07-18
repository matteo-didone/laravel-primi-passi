<!DOCTYPE html>
<html>
<head>
    <title>Laravel Primi Passi</title>
</head>
<body>

    

    <header>
        <h1>Hello, {{ $name }} !</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
