<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();

        Mahasiswa::create([
            'nim' => 'E020322110',
            'nama' => 'Linda',
            'no_hp' => '085250988613',
            'alamat' => 'Seoul',
            'foto' => 'Linda.jpeg',
            'password' => '123',
            'prodi_id' => 1,
        ]);

        Mahasiswa::create([
            'nim' => 'E020322106',
            'nama' => 'Nadia',
            'no_hp' => '085250988612',
            'alamat' => 'Saporo',
            'foto' => 'Linda.jpeg',
            'password' => '123',
            'prodi_id' => 1,
        ]);

        Mahasiswa::factory(100)->create();
    }
}
