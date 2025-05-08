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
    <a href="/notes/create"><button type="button">Izveidot jaunu ierakstu</button></a><br><br>
    <ul>

        @foreach($notes as $note)
        <div class="post-card">
            <h2>{{ $note->title }}</h2>
            <p>{{ $note->content }}</p>

            <form action='/notes/{{$note->id}}' method="get">
                <button type="submit">👁 Apskatīt</button>
            </form>
        </div>
        @endforeach
    </ul>
</body>
</html>