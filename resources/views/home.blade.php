<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$helloWorld}}</h1>


    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
            </ul>
        </nav>

    </header>
</body>
</html>