<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function index()
    {
        // Menampilkan riwayat peminjaman untuk member
        return view('member.history.index');
    }
}
