<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BorrowingController extends Controller
{
    public function index()
    {
        // Menampilkan daftar peminjaman buku
        return view('admin.borrowings.index');
    }

    public function create()
    {
        // Menampilkan form tambah peminjaman
        return view('admin.borrowings.create');
    }

    public function store()
    {
        // Menyimpan data peminjaman buku (logika di sini)
    }

    public function edit($id)
    {
        // Menampilkan form edit peminjaman
        return view('admin.borrowings.edit', compact('id'));
    }

    public function update($id)
    {
        // Update data peminjaman buku (logika di sini)
    }

    public function destroy($id)
    {
        // Hapus data peminjaman (logika di sini)
    }
}
