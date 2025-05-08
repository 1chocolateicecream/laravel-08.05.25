<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<form action="/notes" method="POST">
    @csrf
    <label for="title">Nosaukums:</label><br>
    <input type="text" name="title" id="title"><br><br>

    <label for="content">Saturs:</label><br>
    <textarea name="content" id="content" rows="5"></textarea><br><br>

    <button type="submit">Saglabāt</button>
</form>
</body>
</html>