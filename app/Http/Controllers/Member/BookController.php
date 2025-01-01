<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kata kunci pencarian dari request
        $keyword = $request->input('q'); // Menggunakan 'q' sesuai dengan input form

        // Query buku berdasarkan pencarian judul atau kategori
        $bookInstance = Book::getInstance(); // Menggunakan instance dari Book
        $books = $bookInstance->when($keyword, function ($query, $keyword) {
            return $query->where('judul', 'like', '%' . $keyword . '%')
                ->orWhere('kategori', 'like', '%' . $keyword . '%');
        })->get(); // Ambil semua data buku

        // Kirim data buku dan kata kunci ke view
        return view('member.books.index', compact('books', 'keyword'));
    }

    public function show($id)
    {
        // Menampilkan detail buku
        $bookInstance = Book::getInstance(); // Menggunakan instance dari Book
        $book = $bookInstance->findOrFail($id); // Cari buku berdasarkan ID
        return view('member.books.show', compact('book'));
    }
}
