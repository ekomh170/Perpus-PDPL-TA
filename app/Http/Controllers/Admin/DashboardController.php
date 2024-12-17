<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Data kosong, dihandle di backend nanti
        return view('admin.dashboard');
    }
}
