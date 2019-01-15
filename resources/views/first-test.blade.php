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
        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            .container {
                display: grid;
                grid-template-columns: repeat(15, 50px);
                grid-template-rows: repeat(10, 40px);
                grid-gap: 1em;
                margin: 50px 50px 50px 50px;
                padding: 1em;
            }
            
            .header {
                background-color: aliceblue;
                grid-column: 1 / 16;
                grid-row: 1;
                border: 1px solid black;
            }
            
            .menu {
                background-color: red;    
                grid-column: 1 / 4;
                grid-row: 2 / 10;
                
            }
            
            .main {
                background-color: forestgreen;
                grid-column: 4 / 13;
                grid-row: 2 / 10;
            }
            
            .footer {
                background-color: yellow;
                grid-column: 1 / 16;
                grid-row: 10 / 11;
            }
            
            .users {
                background-color: skyblue;
                grid-column: 13 / 16;
                grid-row: 2 / 6;
            }

            .responses {
                grid-column: 13 / 16;
                grid-row: 6 / 10;
            }
            
            
            .nav {
                background-color: white;
                display: grid;
                
                grid-template-columns: 1fr 1fr .4fr;
                grid-template-rows: repeat(6, 1fr);
                grid-row-gap: 3px;
                grid-column-gap: 5px;
            }
            
            .btn-home {
                grid-column: 1 / 3;
                grid-row: 1;
            }
            
            .btn-search {
                grid-column: 1 / 3;
                grid-row: 2;
            }

             .btn-checks {
                grid-column: 1 / 3;
                grid-row: 3;
            }

            .btn-waterdays {
                grid-column: 1 / 3;
                grid-row: 4;
            }

            .btn-misc {
                grid-column: 1 / 3;
                grid-row: 5;
            }
            
            .btn-admin {
                grid-column: 1 / 3;
                grid-row: 6;
            }
            
            a {
                text-decoration: none;
            }
            
            a:hover {
                font-weight: bold;
            }
            
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
            <div class="main"></div>
            <div class="responses"></div>        
            <div class="users"></div>        
            <div class="footer"></div>        

                        
        
        </div>
        
        
    </body>
</html>
