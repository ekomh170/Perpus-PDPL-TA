<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Ambil instance singleton dari Borrowing
        $borrowInstance = Borrowing::getInstance();

        // Query data dengan relasi member dan book
        $query = $borrowInstance->with(['member', 'book']);

        // Filter berdasarkan tanggal jika tersedia
        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('tanggal_peminjaman', [$request->start_date, $request->end_date]);
        }

        // Ambil semua data tanpa pagination
        $borrowings = $query->get();

        // Kirim data ke view
        return view('admin.reports.borrowing-history', compact('borrowings'));
    }
}
