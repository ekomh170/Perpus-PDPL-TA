<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Memanggil AdminSeeder
        $this->call(AdminSeeder::class);

        // Memanggil MemberSeeder
        $this->call(MemberSeeder::class);

        // Memanggil BookSeeder
        $this->call(BookSeeder::class);

        // Memanggil BorrowingSeeder
        $this->call(BorrowingSeeder::class);
    }
}
