<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/zd-app.css" type="text/css" rel="stylesheet">
        <link href="/css/zd-layout.css" type="text/css" rel="stylesheet">
        
        <style>

        </style>
    </head>
    <body>
        <div class="container">
            <ul>
                @foreach($tasks as $task)
                <li>
                    <a href="/tasks/{{ $task->id }}/edit">
                        {{ $task->id}} - {{ $task->description}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        
        
    </body>
</html>
