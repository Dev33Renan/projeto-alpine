<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body >

        <div x-data="count()">
            <span x-text="count"></span>
            <button @click="increment()">Add</button>
        </div>

      @vite(['resources/js/alpine/start.js', 'resources/js/app.js'])
    </body>
</html>
