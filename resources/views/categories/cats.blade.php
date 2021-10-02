<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>All Categories</title>
    </head>
    <body>
        <h1>All Categories</h1>
        @foreach($cats as $cat)
            <h3>{{$cat->name}}</h3>
            <p>{{$cat->desc}}</p>
        @endforeach
    </body>
</html>
