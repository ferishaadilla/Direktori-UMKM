<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama' => 'Jasa',
            ],
            [
                'nama' => 'Pertanian',
            ],
            [
                'nama' => 'Industri',
            ],
            [
                'nama' => 'Kreatif',
            ]
        ];

        foreach ($kategori as $kat) {
            Kategori::updateOrCreate(['nama' => $kat['nama']], $kat);
        }
    }
}
