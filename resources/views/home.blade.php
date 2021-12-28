<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main>
        @foreach ($movies as $key=>$movie)
        <div class="card">
            <h1>{{$movie->title}}</h1>
            <h3>Original Title: {{$movie->original_title}}</h3>
            <h3>Nationality: {{$movie->nationality}}</h3>
            <h4>Date Of Publication: {{$movie->date}}</h4>
            <h4>Vote: {{$movie->vote}}</h4>
        </div>
        
        @endforeach
    </main>
    
</body>
</html>