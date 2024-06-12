<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $book = book::orderBy('id', 'desc')->get();
        return view('list', compact('book'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $book = new book();
        $book->titulo = $request->titulo;
        $book->isbn = $request->isbn;
        $book->editorial = $request->editorial;
        $book->paginas = $request->paginas;

        $book->save();

        return redirect()->route('book.index');
    }

    public function destroy(book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }

    public function show(book $book)
    {
        return view('show', compact('book'));
    }
    public function edit (book $book){

        return view('edit',compact('book'));

    }
    public function update(Request $request,book $book ){
        $book->titulo = $request->titulo;
        $book->isbn = $request->isbn;
        $book->editorial = $request->editorial;
        $book->paginas = $request->paginas;

        $book->save();

        return redirect()->route('book.index');

    }
}

