<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Menampilkan daftar buku (Read).
     */
    public function index()
    {
        $bookInstance = Book::getInstance();
        $books = $bookInstance->all();

        return view('admin.books.index', compact('books'));
    }

    /**
     * Menampilkan form untuk menambahkan buku baru (Create).
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Menyimpan buku baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'stok' => 'required|integer|min:0',
        ]);

        $bookInstance = Book::getInstance();
        $bookInstance->create($request->all());

        return redirect()->route('admin.books.index')->with('success', 'Book added successfully!');
    }

    /**
     * Menampilkan detail buku (Show).
     */
    public function show($id)
    {
        $bookInstance = Book::getInstance();
        $book = $bookInstance->findOrFail($id);

        return view('admin.books.show', compact('book'));
    }

    /**
     * Menampilkan form untuk mengedit buku.
     */
    public function edit($id)
    {
        $bookInstance = Book::getInstance();
        $book = $bookInstance->findOrFail($id);

        return view('admin.books.edit', compact('book'));
    }

    /**
     * Mengupdate buku yang sudah ada di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'stok' => 'required|integer|min:0',
        ]);

        $bookInstance = Book::getInstance();
        $book = $bookInstance->findOrFail($id);
        $book->update($request->all());

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Menghapus buku dari database.
     */
    public function destroy($id)
    {
        $bookInstance = Book::getInstance();
        $book = $bookInstance->findOrFail($id);
        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully!');
    }
}
