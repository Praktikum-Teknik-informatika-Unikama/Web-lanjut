<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container py-4">
        <nav>
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Much longer nav link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
