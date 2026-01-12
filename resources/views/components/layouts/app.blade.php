<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/resources/css/app.css">

    <title>Belajar Livewire | {{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <nav>
        <a href="/">Todos</a>
        <a href="/hello">Hello World</a>
        <a href="/counter">Counter</a>
    </nav>

    {{ $slot }}
</body>

</html>
