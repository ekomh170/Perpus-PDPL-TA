<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil total buku dari database
        $totalBooks = Book::count();

        // Ambil ID anggota yang sedang login
        $memberId = Auth::user()->member->id; // Asumsikan user memiliki relasi ke member

        // Hitung jumlah peminjaman aktif untuk anggota yang login
        $activeBorrowings = Borrowing::where('member_id', $memberId)
            ->where('status', 'peminjaman')
            ->count();

        // Kirim data ke view
        return view('member.dashboard', compact('totalBooks', 'activeBorrowings'));
    }
}
