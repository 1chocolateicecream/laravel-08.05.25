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
</body>
</html>
