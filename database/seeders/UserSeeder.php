<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'su-admin',
            'email' => 'su-admin@mail.com',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('su-admin');

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'mitra',
            'email' => 'mitra@mail.com',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('mitra');

        $user = User::create([
            'name' => 'kaprodi',
            'email' => 'kaprodi@mail.com',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('kaprodi');

        $user = User::create([
            'name' => 'dospem',
            'email' => 'dospem@mail.com',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('dospem');

        $user = User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@mail.com',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('mahasiswa');

    }
}
