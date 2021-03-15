<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    @yield('content')

    @include('includes.footer')
</body>
</html>
