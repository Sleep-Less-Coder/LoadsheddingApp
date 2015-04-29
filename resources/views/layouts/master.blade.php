<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loadshedding | A loadshedding app in Laravel</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1><a href="{{ URL::route('home') }}">Simple Loadsheding App</a></h1>
        @yield('content')
    </div>
    @yield('footer')
</body>
</html>