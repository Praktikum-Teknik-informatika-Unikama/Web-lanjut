<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>

<body style="padding: 2em">
    <nav>
        <ul style="list-style-type: none;">
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <main>
        @yield('conten')
    </main>
    <br>
    <br>
    <br>
    <footer>footer</footer>
</body>

</html>
