<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <h1>Film</h1>
    @foreach ($movies as $movie)
    <div>{{$movie->title}}</div>
    @endforeach
</body>
</html>