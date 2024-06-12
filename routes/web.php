<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('book/create', [BookController::class, 'create'])->name('book.create');
Route::post('book/store', [BookController::class, 'store'])->name('book.store');
Route::get('book/list', [BookController::class, 'index'])->name('book.index');
Route::delete('boook/{book}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('book/{book}', [BookController::class, 'show'])->name('book.show');
Route::put('book/{book}',[BookController::class,'update'])->name('book.update');
Route::get('book/{book}/edit',[BookController::class,'edit'])->name('book.edit');
