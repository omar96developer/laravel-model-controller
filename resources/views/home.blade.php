<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @dump($movies)
    @foreach ($movies as $movie)
        <h1>{{$movie->title}}</h1>
        <h3>{{$movie->original_title}}</h3>
        <h3>{{$movie->nationality}}</h3>
    @endforeach
</body>
</html>