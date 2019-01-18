<?php
    ini_set("display_errors", 1);
    date_default_timezone_set('America/Chicago');
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/zd-app.css" type="text/css" rel="stylesheet">
        <link href="/css/zd-layout.css" type="text/css" rel="stylesheet">
        
        <style>

        </style>
</head>
<body>
    <div class="container" style="width: 600px;">
        @yield('content')
    </div>
</body>
</html>