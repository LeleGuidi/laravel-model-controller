<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Movie</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h2>Titolo: {{$movie->title}}</h2>
            <p>Titolo originale: {{$movie->original_title}}</p>
            <p>Nazionalità: {{$movie->nationality}}</p>
            <p>Data di pubblicazione: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}</p>
        </li>
        @endforeach
    </ul>
</body>
</html>