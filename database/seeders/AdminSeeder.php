<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan 2 admin ke tabel users dan members
        $admins = [
            [
                'name' => 'Eko Muchamad Haryono',
                'email' => 'ekomh13@example.com',
                'password' => Hash::make('admin2829'),
                'role' => 'admin',
            ],
            [
                'name' => 'admin123',
                'email' => 'admin123@example.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        ];

        foreach ($admins as $admin) {
            // Membuat user baru
            $user = User::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'password' => $admin['password'],
                'role' => $admin['role'],
            ]);

            // Menambahkan data member yang terkait dengan user yang baru dibuat
            Member::create([
                'user_id' => $user->id,  // Menyimpan user_id untuk relasi dengan user
                'nama' => $admin['name'],
                'email' => $admin['email'],
                'status' => 'active', // Status aktif untuk admin
            ]);
        }
    }
}
