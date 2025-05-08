<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Notes</h1>
    <a href="/notes/create">Izveidot jaunu ierakstu</a>
    <ul>

        @foreach($notes as $note)
        <h2>{{ $note->title }}</h2>
        <p>{{ $note->content }}</p>
        @endforeach
    </ul>
</body>
</html>