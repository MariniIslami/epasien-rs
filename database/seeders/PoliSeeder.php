<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Poliklinik Spesialis Saraf',
            'Poliklinik Spesialis Penyakit Dalam',
            'Poliklinik Spesialis Bedah',
            'Poliklinik Spesialis Gigi',
            'Poliklinik Spesialis Urologi',
            'Poliklinik Spesialis Kandungan',
            'Poliklinik Spesialis Fisioterapi',
            'Poliklinik Spesialis Anak',
            'Poliklinik Spesialis THT',
            'Poliklinik Spesialis Mata',
            'Poliklinik Spesialis Kulit dan Kelamin',
            'Poliklinik Spesialis Paru',
            'Poliklinik Spesialis Jantung',
            'Poliklinik Spesialis Orthopedi',
            'Poliklinik Umum',
        ];

        foreach ($data as $poli) {
            Poli::create([
                'nama_poli' => $poli,
                'aktif' => true
            ]);
        }
    }
}
