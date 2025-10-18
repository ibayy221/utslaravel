<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas1 = Kelas::first();
        $kelas2 = Kelas::skip(1)->first();

        Mahasiswa::insert([
            ['nim' => '2023001', 'nama' => 'Budi', 'alamat' => 'Jl. Merdeka 1', 'kelas_id' => $kelas1->id, 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2023002', 'nama' => 'Siti', 'alamat' => 'Jl. Merdeka 2', 'kelas_id' => $kelas2->id, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
