<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsi = [
            [
                'nama' => 'Jambi',
                'ibukota' => 'Jakarta',
                'latitude' => -1.596672,
                'longitude' => 103.615799,
            ],
            [
                'nama' => 'Jawa barat',
                'ibukota' => 'Jakarta',
                'latitude' => -6.943097,
                'longitude' => 107.633545,
            ],
            [
                'nama' => 'Bali',
                'ibukota' => 'Jakarta',
                'latitude' => -8.409518,
                'longitude' => 115.188919,
            ],
            [
                'nama' => 'Gorontalo',
                'ibukota' => 'Jakarta',
                'latitude' => 0.556174,
                'longitude' => 123.058548,
            ]
        ];

        foreach ($provinsi as $prov) {
            Provinsi::updateOrCreate(['nama' => $prov['nama']], $prov);
        }
    }
}
