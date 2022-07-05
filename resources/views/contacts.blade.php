<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="block">
        <h2>Its Contacts page</h2>
        <ul>
            <li><a href="{{ route('home') }}">Return home</a></li>
        </ul>
    </div>
</body>
</html>