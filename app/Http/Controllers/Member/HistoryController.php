<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Container\Attributes\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        // Menampilkan riwayat peminjaman untuk member
        $borrowInstance = Borrowing::getInstance();
        $borrowings = $borrowInstance->all();
        return view('member.history.index' , compact('borrowings'));
    }
}
