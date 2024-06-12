<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Inversionistas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>LIBROS</h1>

  <table id="books-table">
    <thead>
      <tr>
        <th style="background-color: #3498db; color: white;">ID</th>
        <th style="background-color: #3498db; color: white;">titulo</th>
        <th style="background-color: #3498db; color: white;">isbn</th>
        <th style="background-color: #3498db; color: white;">editorial</th>
        <th style="background-color: #3498db; color: white;">paginas</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($book as $book)
        <tr style="cursor: pointer;" onclick="showInversionistaDetails({{ $book->id }})">
          <td>{{ $book->id }}</td>
          <td>{{ $book->titulo }}</td>
          <td>{{ $book->isbn }}</td>
          <td>{{ $book->editorial }}</td>
          <td>{{ $book->paginas }}</td>
          <td>
            <a href="{{ route('book.show', $book->id) }}">Mostrar</a>
            <td><a href="{{route('book.edit',$book->id)}}">Editar</a></td>
            <td>
            <form action="{{ route('book.destroy', $book->id) }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div id="book-details-modal" style="display: none;">
    <div class="modal-content">
      <span class="close-button" onclick="closeModal()">&times;</span>
      <h2>Detalles</h2>
      <p id="book-titulo"></p>
      <p id="book-isbn"></p>
      <p id="book-editorial"></p>
      <p id="book-paginas"></p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>