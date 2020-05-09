<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div>
            @foreach ($objectives as $objective)
            <div>
                <h4>Objective: <span>{{ $objective->name}}</span></h4>
                <div>
                    <ul>
                        <li>Call 10 new clients</li>
                        <li>Email 20 new clients</li>
                        <li>Have lunch with 5 new clients</li>
                    </ul>
                </div> 
            </div>
            @endforeach
        </div>
    </body>
</html>
