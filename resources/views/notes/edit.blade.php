<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rediģēt postu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>✎ Rediģēt note</h1>

    <form action="/notes/{{$note->id}}/" method="POST">
        @csrf
        @method('PUT')

        <label>Nosaukums:</label>
        <input type="text" name="title" value="{{ $note->title }}" required>

        <label>Saturs:</label>
        <textarea name="content" rows="6" required>{{ $note->content }}</textarea>

        <button type="submit">Saglabāt izmaiņas</button>
    </form>
</body>
</html>