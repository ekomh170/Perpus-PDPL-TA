<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan 2 member ke tabel users dan members
        $members = [
            [
                'name' => 'member123',
                'email' => 'member123@example.com',
                'password' => Hash::make('member123'),
                'role' => 'member',  // Role sebagai member
            ],
            [
                'name' => 'Ilyas123',
                'email' => 'ilyas123@example.com',
                'password' => Hash::make('ilyas123'),
                'role' => 'member',  // Role sebagai member
            ]
        ];

        foreach ($members as $member) {
            // Membuat user baru dengan role 'member'
            $user = User::create([
                'name' => $member['name'],
                'email' => $member['email'],
                'password' => $member['password'],
                'role' => $member['role'],
            ]);

            // Menambahkan data member yang terkait dengan user yang baru dibuat
            // Meskipun role user adalah member, member tetap status 'active'
            Member::create([
                'user_id' => $user->id,  // Menyimpan user_id untuk relasi dengan user
                'nama' => $member['name'],
                'email' => $member['email'],
                'status' => 'active', // Status aktif untuk member
            ]);
        }
    }
}
