<?php

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\BorrowingController;
use App\Http\Controllers\Admin\ReportController;

// Member
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use App\Http\Controllers\Member\BookController as MemberBookController;
use App\Http\Controllers\Member\HistoryController;

// Landing Page
use App\Http\Controllers\LandingController;

// Breeze
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/features', [LandingController::class, 'features'])->name('landing.features');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

Route::get('/test', function () {
    return view('welcome');
});

// Admin Routes
Route::prefix('admin')
    // ->middleware(['auth', 'role:admin']) // Middleware dikomentari untuk sementara
    ->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Menambahkan name pada resource routes
        Route::resource('/books', BookController::class, ['names' => [
            'index'   => 'admin.books.index',
            'create'  => 'admin.books.create',
            'store'   => 'admin.books.store',
            'show'    => 'admin.books.show',
            'edit'    => 'admin.books.edit',
            'update'  => 'admin.books.update',
            'destroy' => 'admin.books.destroy',
        ]]);

        Route::resource('/members', MemberController::class, ['names' => [
            'index'   => 'admin.members.index',
            'create'  => 'admin.members.create',
            'store'   => 'admin.members.store',
            'show'    => 'admin.members.show',
            'edit'    => 'admin.members.edit',
            'update'  => 'admin.members.update',
            'destroy' => 'admin.members.destroy',
        ]]);

        Route::resource('/borrowings', BorrowingController::class, ['names' => [
            'index'   => 'admin.borrowings.index',
            'create'  => 'admin.borrowings.create',
            'store'   => 'admin.borrowings.store',
            'show'    => 'admin.borrowings.show',
            'edit'    => 'admin.borrowings.edit',
            'update'  => 'admin.borrowings.update',
            'destroy' => 'admin.borrowings.destroy',
        ]]);

        Route::get('/reports', [ReportController::class, 'index'])->name('admin.reports');
    });


// Member Routes
Route::prefix('member')
    // ->middleware(['auth', 'role:member']) // Middleware dikomentari untuk sementara
    ->group(function () {
        Route::get('/dashboard', [MemberDashboardController::class, 'index'])->name('member.dashboard');

        // Menggunakan resource untuk books dengan nama route yang disesuaikan
        Route::resource('/books', MemberBookController::class, ['names' => [
            'index'   => 'member.books.index',
            'show'    => 'member.books.show',
        ]])->only(['index', 'show']);

        // History route
        Route::get('/history', [HistoryController::class, 'index'])->name('member.history.index');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
