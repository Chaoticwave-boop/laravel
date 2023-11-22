<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>
    <h1>all songs :D</h1>
    @foreach($songs as $song)
        <a href="#">{{$song->name}}</a> - {{$song->Genre->name}} - {{$song->duration}}
        <br>
    @endforeach


    
</body>
</html>