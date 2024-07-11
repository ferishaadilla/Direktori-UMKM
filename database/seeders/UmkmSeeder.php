<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkm = [
            [
                'nama' => 'Angkringan 69',
                'modal' => 20000000,
                'pemilik' => 'Ipan Slaw',
                'alamat' => 'Jl. Depok No. 69',
                'kabkota_id' => 1,
                'website' => 'www.Angkringan69.com',
                'email' => 'angkringan69@yahoo.com',
                'rating' => 5,
                'kategori_id' => 1,
                'pembina_id' => 1,
            ],
            [
                'nama' => 'Kebab Bat',
                'modal' => 22000000,
                'pemilik' => 'Siti',
                'alamat' => 'Jl. Depok No. 69',
                'kabkota_id' => 4,
                'website' => 'www.KebabBat.com',
                'email' => 'kebabbat@gmail.com',
                'rating' => 5,
                'kategori_id' => 1,
                'pembina_id' => 2,
            ],
            [
                'nama' => 'Takoyaki New',
                'modal' => 17000000,
                'pemilik' => 'Ijat',
                'alamat' => 'Jl. Depok No. 69',
                'kabkota_id' => 1,
                'website' => 'www.takoyakinew.com',
                'email' => 'takoyakinew@gmail.com',
                'rating' => 5,
                'kategori_id' => 1,
                'pembina_id' => 1,
            ],
            [
                'nama' => 'Sebalak Jokel',
                'modal' => 25000000,
                'pemilik' => 'Pudon',
                'alamat' => 'Jl. Depok No. 69',
                'kabkota_id' => 3,
                'website' => 'www.seblakjokel.com',
                'email' => 'seblakjokel@gmail.com',
                'rating' => 5,
                'kategori_id' => 1,
                'pembina_id' => 3,
            ]
        ];

        foreach ($umkm as $um) {
            Umkm::updateOrCreate(['nama' => $um['nama']], $um);
        }
    }
}