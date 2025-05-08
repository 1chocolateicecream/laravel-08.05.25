<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $note->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="notes-card">
        <h2>{{ $note->title }}</h2>
        <p>{{ $note->content }}</p>
    </div>

    <div class="button-row">
    <a href="/notes/{{$note->id}}/edit">
        <button>✐ Rediģēt</button>
    </a>

    <form action="/notes/{{$note->id}}" method="POST" class="inline-form">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color: #ef9a9a;">☠ Dzēst</button>
    </form>
</body>
</html>
