<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome TODO Parrot</title>
    </head>
    <body>
        <h1>Chris</h1>
            <a href="{{ URL::route('home.category', ['category'=>'php']) }}">php</a>
               <p>{{ $name }}</p>
    </body>
</html>