<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        //Menampilkan Index Landing Page
        return view('landing.index');
    }
    public function about()
    {
        //Menampilkan Halaman About Landing Page
        return view('landing.about');
    }
    public function features()
    {
        //Menampilkan halaman Features Landing Page
        return view('landing.features');
    }
    public function contact()
    {
        //Menampilkan contact Landing Page
        return view('landing.contact');
    }
    
}