<?php

namespace Database\Seeders;

use App\Models\Pembina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembina = [
            [
                'nama' => 'Siti Aisyah',
                'gender' => 'P',
                'tgl_lahir' => '2004-07-03',
                'tmp_lahir' => 'Citayem',
                'keahlian' => 'Memasak',
            ],
            [
                'nama' => 'Rizki',
                'gender' => 'L',
                'tgl_lahir' => '2004-09-15',
                'tmp_lahir' => 'Garut',
                'keahlian' => 'Memasak',
            ],
            [
                'nama' => 'Ridwan',
                'gender' => 'L',
                'tgl_lahir' => '2008-02-21',
                'tmp_lahir' => 'Jakarta',
                'keahlian' => 'Kemampuan untuk terus Berinovasi',
            ],
            [
                'nama' => 'Raisya',
                'gender' => 'P',
                'tgl_lahir' => '2023-12-10',
                'tmp_lahir' => 'Bandung',
                'keahlian' => 'Kemampuan komunikasi dan membangun jaringan bisnis',
            ]
        ];

        foreach ($pembina as $pem) {
            Pembina::updateOrCreate(['nama' => $pem['nama']], $pem);
        }
    }
}
