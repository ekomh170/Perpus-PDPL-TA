<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa data buku ke dalam tabel books
        Book::create([
            'judul' => 'Pemrograman Web Dasar',
            'penulis' => 'John Doe',
            'kategori' => 'Teknologi',
            'stok' => 10,
        ]);

        Book::create([
            'judul' => 'Belajar Laravel',
            'penulis' => 'Jane Smith',
            'kategori' => 'Pemrograman',
            'stok' => 5,
        ]);

        Book::create([
            'judul' => 'Algoritma dan Struktur Data',
            'penulis' => 'Albert Einstein',
            'kategori' => 'Ilmu Komputer',
            'stok' => 7,
        ]);

        Book::create([
            'judul' => 'Dasar-dasar Jaringan Komputer',
            'penulis' => 'Michael Jordan',
            'kategori' => 'Jaringan',
            'stok' => 3,
        ]);

        Book::create([
            'judul' => 'Pengantar Kecerdasan Buatan',
            'penulis' => 'Isaac Asimov',
            'kategori' => 'Kecerdasan Buatan',
            'stok' => 8,
        ]);
    }
}
