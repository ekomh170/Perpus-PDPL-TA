<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Member;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        // Mengambil data peminjaman dengan relasi member dan book
        $borrowings = Borrowing::getInstance()->with(['member', 'book'])->get();

        return view('admin.borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        // Mengambil data anggota aktif dan buku yang tersedia stoknya
        $members = Member::getInstance()->where('status', 'active')->get();
        $books = Book::getInstance()->where('stok', '>', 0)->get();

        return view('admin.borrowings.create', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'nullable|date|after_or_equal:tanggal_peminjaman',
            'status' => 'required|in:peminjaman,pengembalian',
            'denda' => 'nullable|numeric|min:0',
        ]);

        // Validasi stok buku
        $book = Book::getInstance()->findOrFail($request->book_id);
        if ($book->stok < 1) {
            return redirect()->back()->withErrors(['book_id' => 'Stok buku tidak mencukupi.'])->withInput();
        }

        // Validasi anggota meminjam buku yang sama
        $existingBorrowing = Borrowing::getInstance()
            ->where('member_id', $request->member_id)
            ->where('book_id', $request->book_id)
            ->where('status', 'peminjaman')
            ->first();

        if ($existingBorrowing) {
            return redirect()->back()->withErrors(['book_id' => 'Anggota sudah meminjam buku ini.'])->withInput();
        }

        // Pastikan nilai default untuk denda adalah 0 jika tidak diisi
        $data = $request->all();
        $data['denda'] = $data['denda'] ?? 0;

        // Kurangi stok buku
        $book->decrement('stok');

        // Simpan data peminjaman
        Borrowing::getInstance()->create($data);

        return redirect()->route('admin.borrowings.index')->with('success', 'Peminjaman berhasil ditambahkan!');
    }


    public function show($id)
    {
        // Ambil detail peminjaman dengan relasi
        $borrowing = Borrowing::getInstance()->with(['member', 'book'])->findOrFail($id);

        return view('admin.borrowings.show', compact('borrowing'));
    }

    public function edit($id)
    {
        // Ambil data peminjaman, anggota aktif, dan semua buku
        $borrowing = Borrowing::getInstance()->findOrFail($id);
        $members = Member::getInstance()->where('status', 'active')->get();
        $books = Book::getInstance()->all();

        return view('admin.borrowings.edit', compact('borrowing', 'members', 'books'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'nullable|date|after_or_equal:tanggal_peminjaman',
            'status' => 'required|in:peminjaman,pengembalian',
            'denda' => 'nullable|numeric|min:0',
        ]);

        $borrowing = Borrowing::getInstance()->findOrFail($id);

        // Ambil buku lama yang dipinjam
        $oldBook = $borrowing->book;

        // Ambil data buku baru
        $newBook = Book::getInstance()->findOrFail($request->book_id);

        // Jika buku berubah, sesuaikan stok
        if ($oldBook->id !== $newBook->id) {
            // Kembalikan stok buku lama
            $oldBook->increment('stok');

            // Kurangi stok buku baru jika stok mencukupi
            if ($newBook->stok < 1) {
                return redirect()->back()->withErrors(['book_id' => 'Stok buku tidak mencukupi.'])->withInput();
            }
            $newBook->decrement('stok');
        }

        // Update data peminjaman
        $borrowing->update($request->all());

        return redirect()->route('admin.borrowings.index')->with('success', 'Peminjaman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $borrowing = Borrowing::getInstance()->findOrFail($id);

        // Jika status adalah peminjaman, kembalikan stok buku
        if ($borrowing->status === 'peminjaman') {
            $borrowing->book->increment('stok');
        }

        $borrowing->delete();

        return redirect()->route('admin.borrowings.index')->with('success', 'Peminjaman berhasil dihapus!');
    }

    public function markAsReturned(Request $request, $id)
    {
        // Validasi input denda
        $request->validate([
            'denda' => 'nullable|numeric|min:0',
        ]);

        // Ambil data peminjaman berdasarkan ID
        $borrowing = Borrowing::getInstance()->with('book')->findOrFail($id);

        // Pastikan status saat ini adalah 'peminjaman'
        if ($borrowing->status !== 'peminjaman') {
            return redirect()->route('admin.borrowings.index')
                ->withErrors(['error' => 'Hanya peminjaman yang belum dikembalikan dapat dikonfirmasi.']);
        }

        // Update status menjadi 'pengembalian', tambahkan tanggal pengembalian, dan denda (default ke 0 jika tidak diisi)
        $borrowing->update([
            'status' => 'pengembalian',
            'tanggal_pengembalian' => now(), // Menggunakan tanggal sekarang
            'denda' => $request->input('denda', 0), // Gunakan nilai 0 jika tidak diisi
        ]);

        // Kembalikan stok buku
        $borrowing->book->increment('stok');

        return redirect()->route('admin.borrowings.index')
            ->with('success', 'Peminjaman telah dikonfirmasi sebagai dikembalikan.');
    }
}
