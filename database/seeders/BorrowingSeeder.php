<?php

namespace Database\Seeders;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BorrowingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mendapatkan semua member dan buku yang ada
        $members = Member::all();
        $books = Book::all();

        // Melakukan peminjaman untuk setiap member
        foreach ($members as $member) {
            // Pilih buku secara acak
            $book = $books->random();

            // Membuat peminjaman untuk member
            Borrowing::create([
                'member_id' => $member->id,
                'book_id' => $book->id,
                'tanggal_peminjaman' => Carbon::now(), // Waktu sekarang sebagai tanggal peminjaman
                'tanggal_pengembalian' => null, // Belum dikembalikan
                'status' => 'peminjaman', // Status peminjaman
                'denda' => 0.00, // Belum ada denda
            ]);
        }
    }
}
