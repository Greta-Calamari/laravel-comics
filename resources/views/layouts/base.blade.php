<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Roboto:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">
    <title>@yield('pageTitle')</title>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('mainContent')
    </main>
    @include('partials.footer')
    
</body>
</html>