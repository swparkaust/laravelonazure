<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel with SQLite</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
