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

      <script src="build/assets/app-4ed993c7.js"></script>
      <script src="build/assets/start-a0fda65d.js"></script>
    </body>
</html>
