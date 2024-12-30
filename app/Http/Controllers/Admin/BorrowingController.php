<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Borrowing;
use App\Models\Member;

class BorrowingController extends Controller
{
    public function index()
    {
        // Menampilkan daftar peminjaman buku
        $borrowInstance = Borrowing::getInstance();
        $borrowings = $borrowInstance->all();
        $bookInstance = Book::getInstance();
        $books = $bookInstance->all();
        $memberInstance = Member::getInstance();
        $members = $memberInstance->all();

        return view('admin.borrowings.index', compact('borrowings', 'books', 'members'));
    }

    public function create()
    {
        // Menampilkan form tambah peminjaman
        $memberInstance = Member::getInstance();
        $members = $memberInstance->all();
        $bookInstance = Book::getInstance();
        $books = $bookInstance->all();
        return view('admin.borrowings.create', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        // Menyimpan data peminjaman buku (logika di sini)
        $request->validate([
            'member_id' => 'required',
            'book_id' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'nullable|date',
            'status' => 'required|in:peminjaman,pengembalian',
            'denda' => 'nullable|numeric',
        ]);

        $borrowInstance = Borrowing::getInstance();
        $borrowInstance->create($request->all());

        return redirect()->route('admin.borrowings.index')->with('success', 'Borrowing added successfully!');

    }

    public function show($id)
    {
        // Menampilkan detail peminjaman buku
        $borrowInstance = Borrowing::getInstance();
        $borrowing = $borrowInstance->findOrFail($id);

        return view('admin.borrowings.show', compact('borrowing'));
    }

    public function edit($id)
    {
        // Menampilkan form edit peminjaman
        $borrowInstance = Borrowing::getInstance();
        $borrowing = $borrowInstance->findOrFail($id);
        $memberInstance = Member::getInstance();
        $members = $memberInstance->all();
        $bookInstance = Book::getInstance();
        $books = $bookInstance->all();

        return view('admin.borrowings.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Update data peminjaman buku (logika di sini)
        $request->validate([
            'member_id' => 'required',
            'book_id' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'nullable|date',
            'status' => 'required|in:peminjaman,pengembalian',
            'denda' => 'nullable|numeric',
        ]);

        $borrowInstance = Borrowing::getInstance();
        $borrowInstance->findOrFail($id)->update($request->all());

        return redirect()->route('admin.borrowings.index')->with('success', 'Borrowing updated successfully!');
        
    }

    public function destroy($id)
    {
        // Hapus data peminjaman (logika di sini)
        $borrowInstance = Borrowing::getInstance();
        $borrowInstance->findOrFail($id)->delete();

        return redirect()->route('admin.borrowings.index')->with('success', 'Borrowing deleted successfully!');
    }
}
