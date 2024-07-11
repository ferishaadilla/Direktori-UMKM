<?php

namespace Database\Seeders;

use App\Models\Kab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KabKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabKota = [
            [
                'nama' => 'Depok',
                'latitude' => -6.402484,
                'longitude' => 106.794240,
                'provinsi_id' => 2,
            ],
            [
                'nama' => 'Tanggerang',
                'latitude' => -6.229728,
                'longitude' => 106.689431,
                'provinsi_id' => 2,
            ],
            [
                'nama' => 'Jakarta',
                'latitude' => -6.208763,
                'longitude' => 106.845599,
                'provinsi_id' => 2,
            ],
            [
                'nama' => 'Bogor',
                'latitude' => -6.594587,
                'longitude' => 106.789150,
                'provinsi_id' => 2,
            ]
        ];

        foreach ($kabKota as $kab) {
            Kab::updateOrCreate(['nama' => $kab['nama']], $kab);
        }
    }
}
