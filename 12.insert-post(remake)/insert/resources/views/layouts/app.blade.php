<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Rabuncode'}}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
</head>
<body>
    

    @include('layouts.navbar')

    @yield('body')


    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">

</body>
</html>