<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        // Menampilkan daftar buku untuk member
        return view('member.books.index');
    }

    public function show($id)
    {
        // Menampilkan detail buku
        return view('member.books.show', compact('id'));
    }
}
