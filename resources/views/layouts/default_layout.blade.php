<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('page_title')</title>
</head>
<body>
    <header>@yield('header_content')</header>
    <main>@yield('main_content')</main>
    <footer>@yield('footer_content')</footer>
</body>
</html>