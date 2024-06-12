<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>CREAR</h1>

<form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Titulo:
    <br>
    <input type="text" name="titulo">
</label>
<br>
<label>
    ISBN:
    <br>
    <input type="text" name="isbn">
</label>
<br>
<label>
    EDITORIAL:
    <br>
    <input type="text" name="editorial">
</label>
<br>
<label>
    PAGINAS:
    <br>
    <input type="text" name="paginas">
</label>
<br>
<br>
<button type="submit">Enviar</button>
</form>
</body>
</html>