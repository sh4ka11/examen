<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('book.update', $book)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        TITULO:
        <br>
        <input name="titulo" type="text" value="{{old('titulo',$book->titulo) }}">
        <br>
        </label>
        <br>
        <label>
        ISBN:
        <br>
        <input name="isbn" type="text" value="{{old('isbn',$book->isbn)}}">
        <br>
        </label>
        EDITORIAL:
        <br>
        <input name="editorial" type="text" value="{{old('editorial',$book->editorial)}}">
        <br>
        </label>
        PAGINAS:
        <br>
        <input name="paginas" type="text" value="{{old('paginas',$book->paginas)}}">
        <br>
        </label>
        <br>
        <button  type="submit">Actualizar</button>
    </form>
</body>
</html>