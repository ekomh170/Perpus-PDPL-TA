<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Support\Facades\Auth; // Gunakan facade Auth

class HistoryController extends Controller
{
    public function index()
    {
        // Ambil ID anggota yang sedang login
        $memberId = Auth::user()->member->id; // Asumsikan user memiliki relasi ke member

        // Ambil riwayat peminjaman berdasarkan anggota yang sedang login
        $borrowings = Borrowing::where('member_id', $memberId)->get();

        // Kirim data ke view
        return view('member.history.index', compact('borrowings'));
    }
}
