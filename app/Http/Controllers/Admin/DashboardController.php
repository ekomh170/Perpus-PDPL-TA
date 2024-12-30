<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Member;

class DashboardController extends Controller
{
    public function index()
    {
        // Data kosong, dihandle di backend nanti
        $totalBooks = Book::count();
        $totalMembers = Member::count();
        return view('admin.dashboard', compact('totalBooks', 'totalMembers'));
    }
}
