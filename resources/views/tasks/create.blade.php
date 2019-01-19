<!doctype html>
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

            <div class="main">
                
                <form method="post" action="/tasks">
                    
                    {{ csrf_field() }}
                    
                    <div>
                        <input type="text" name="user_id" required>
                    </div>
                    <div>
                        <input type="text" name="property_id" required>
                    </div>
                    <div>
                        <input type="text" name="description" required>
                    </div>
                    <div>
                        <input type="text" name="comments" required>
                    </div>
                    <div>
                        <input type="text" name="status" required>
                    </div>
                    <div>
                        <input type="text" name="scheduled_date" required>
                    </div>
                    <div>
                        <button type="submit">Submit Task</button>
                    </div>
                </form>
            </div>
                
        
        </div>
        
        
    </body>
</html>
