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
        <h2>Current app locale: {{ app()->getLocale() }}</h2>

        <p><span class="highlight">Change app locale</span> and see how static text, posts content, and links with default locales change</p>
        <ul>
            <li><a href="{{ route('home', ['locale' => 'en']) }}">Set locale english!</a></li>
            <li><a href="{{ route('home', ['locale' => 'ru']) }}">Set locale russian!</a></li>
        </ul>
    </div>

    <div class="block">
        <h2>Static text</h2>
        <p>
            This is multilanguage static text: <b>"@lang('Welcome')"</b>
            <br>Static text translations stored in lang/json files
        </p>
    </div>

    <div class="block">
        <h2>Links with default locales</h2>
        <ul>
            <li><a href="{{ route('home') }}">Visit home page</a></li>
            <li><a href="{{ route('contacts') }}">Visit contacts page</a></li>
        </ul>
    </div>

    @foreach ($posts as $post)
    <div class="block">
        <h2>Post title: {{ $post->translation()->title }}</h2>
        <p>
            {{ $post->translation()->content }}
        </p>
    </div>
    @endforeach
</body>
</html>