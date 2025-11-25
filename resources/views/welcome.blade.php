<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>
    <h1>TODOS</h1>
    @if(!empty($todos) && count($todos))
        <ul>
            @foreach($todos as $todo)
                <li>{{ $todo->title }}</li>
            @endforeach
        </ul>
    @else
        <p class="empty">Aucun todo.</p>
    @endif
</body>
</html>