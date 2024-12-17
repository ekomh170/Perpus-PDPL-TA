<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        // Menampilkan laporan peminjaman
        return view('admin.reports.borrowing-history');
    }
}
