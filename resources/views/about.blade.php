<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primi-passi</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <header>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>

        </header>
        
        <h2>{{ $page_title }}</h2>
        <h1>{{$message}}</h1>

    </body>
</html>
