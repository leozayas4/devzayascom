<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            <div class="header"></div>
            <div class="menu">
            
                <div class="nav">
                    <div class="btn-home ts-1-5 txt-l"><a href="/">Home</a></div>
                    <div class="btn-search ts-1-5 txt-l">Properties</div>
                    <div class="btn-checks ts-1-5 txt-l">Checks</div>
                    <div class="btn-waterdays ts-1-5 txt-l">Water Days</div>
                    <div class="btn-misc ts-1-5 txt-l">Misc</div>
                    <div class="btn-admin ts-1-5 txt-l">Admin</div>
                </div>
    
            </div>
            <div class="prop-info"></div>
            <div class="main"></div>
            <div class="responses"></div>        
            <div class="users"></div>        
            <div class="footer"></div>        

                        
        
        </div>
        
        
    </body>
</html>
