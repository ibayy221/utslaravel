<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::insert([
            ['nama_kelas' => 'ASE-1A', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'ASE-1B', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => 'ASE-1C', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}