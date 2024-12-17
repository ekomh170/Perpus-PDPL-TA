<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        // Menampilkan daftar anggota
        return view('admin.members.index');
    }

    public function create()
    {
        // Menampilkan form tambah anggota
        return view('admin.members.create');
    }

    public function store()
    {
        // Menyimpan data anggota ke database (logika di sini)
    }

    public function edit($id)
    {
        // Menampilkan form edit anggota
        return view('admin.members.edit', compact('id'));
    }

    public function update($id)
    {
        // Update data anggota (logika di sini)
    }

    public function destroy($id)
    {
        // Hapus data anggota (logika di sini)
    }
}
