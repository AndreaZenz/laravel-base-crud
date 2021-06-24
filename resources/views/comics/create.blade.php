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
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">

        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description">

        <label for="price">Prezzo</label>
        <input type="text" name="price" id="price">

        <label for="series">serie</label>
        <input type="text" name="series" id="series">

        <label for="sale_date">data saldi</label>
        <input type="text" name="sale_date" id="sale_date">

        <label for="type">tipo</label>
        <input type="text" name="type" id="type">



        <input type="submit" value="Invia">
    </form>
</body>
</html>
