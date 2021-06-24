<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('comics.create') }}">Aggiungi fumetto...</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>prezzo</th>
                <th>serie</th>
                <th>data sconto</th>
                <th>tipo</th>
            </tr>
        </thead>

        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date}}</td>
                <td>{{ $comic->type }}</td>
                <td><a href="{{ route('comics.show', $comic->id) }}">Dettagli...</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>
