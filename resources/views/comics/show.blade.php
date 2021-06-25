<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('comics.index') }}">Torna alla home</a>

    <ul>

        <li>ID: {{ $comic->id }}</li>
        <li>TITOLO: {{ $comic->title }}</li>
        <li>DESCRIZIONE: {{ $comic->description }}</li>
        <li>URL COPERTINA: {{ $comic->thumb }}</li>
        <li>PREZZO: {{ $comic->price }}</li>
        <li>SERIE: {{ $comic->series }}</li>
        <li>DATA SCONTO: {{ $comic->sale_date }}</li>
        <li>TIPO: {{ $comic->type }}</li>
    </ul>
    <script src={{asset('js/app.js')}}></script>
</body>
</html>
