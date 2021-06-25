<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include("partials.errorsAlert")

    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf

        @method('PATCH')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic->title}}">

        <label for="description">description</label>
        <input type="description" name="description" id="description" value="{{ $comic->description }}">

        <input type="submit" value="Salva">
    </form>
    <script src={{asset('js/app.js')}}></script>
</body>
</html>
