<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{  $name ?? 'Rabuncode' }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    

    @include('layouts.navbar')

    @yield('body')

    

    <link rel="stylesheet" href="{{ asset('js/bootstrap.js') }}">
    <link rel="stylesheet" href="{{ asset('js/jquery-3.5.1.js') }}">
</body>
</html>