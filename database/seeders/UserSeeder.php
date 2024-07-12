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
            'partnerType' => 'su-admin',
            'username' => 'su-admin',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('su-admin');

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'partnerType' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'mitra pt',
            'email' => 'mitra.pt@mail.com',
            'partnerType' => 'mitra-pt',
            'username' => 'mitra-pt',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('mitra-pt');

        $user = User::create([
            'name' => 'mitra industri',
            'email' => 'mitra.industri@mail.com',
            'partnerType' => 'mitra-industri',
            'username' => 'mitra-industri',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('mitra-industri');

        $user = User::create([
            'name' => 'kaprodi',
            'email' => 'kaprodi@mail.com',
            'partnerType' => 'kaprodi',
            'username' => 'kaprodi',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('kaprodi');

        $user = User::create([
            'name' => 'dospem',
            'email' => 'dospem@mail.com',
            'partnerType' => 'dospem',
            'username' => 'dospem',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('dospem');

        $user = User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@mail.com',
            'partnerType' => 'mahasiswa',
            'username' => 'mahasiswa',
            'password' => bcrypt('rahasia'),
        ]);

        $user->assignRole('mahasiswa');

    }
}
