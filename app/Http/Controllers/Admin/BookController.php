<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        // Menampilkan daftar buku
        return view('admin.books.index');
    }

    public function create()
    {
        // Menampilkan form tambah buku
        return view('admin.books.create');
    }

    public function store()
    {
        // Menyimpan data buku ke database (logika di sini)
    }

    public function edit($id)
    {
        // Menampilkan form edit buku
        return view('admin.books.edit', compact('id'));
    }

    public function update($id)
    {
        // Update data buku (logika di sini)
    }

    public function destroy($id)
    {
        // Hapus data buku (logika di sini)
    }
}
