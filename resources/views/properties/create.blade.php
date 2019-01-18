<!doctype html>
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

            <div class="main">
                
                <form method="post" action="/properties">
                    
                    {{ csrf_field() }}
                    
                    <div>
                        <input type="text" name="job_number" required>
                    </div>
                    <div>
                        <input type="text" name="job_name" required>
                    </div>
                    <div>
                        <input type="text" name="address" required>
                    </div>
                    <div>
                        <input type="text" name="address2" required>
                    </div>
                    <div>
                        <button type="submit">Submit Property</button>
                    </div>
                </form>
            </div>
                
        
        </div>
        
        
    </body>
</html>
