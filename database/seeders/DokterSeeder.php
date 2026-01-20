<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\Poli;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        $poliSaraf = Poli::where('nama_poli', 'Poliklinik Spesialis Saraf')->first();
        $poliDalam = Poli::where('nama_poli', 'Poliklinik Spesialis Penyakit Dalam')->first();

        if ($poliSaraf) {
            Dokter::create([
                'poli_id' => $poliSaraf->id,
                'nama_dokter' => 'dr. Ahmad, Sp.S',
                'spesialis' => 'Saraf'
            ]);
        }

        if ($poliDalam) {
            Dokter::create([
                'poli_id' => $poliDalam->id,
                'nama_dokter' => 'dr. Budi, Sp.PD',
                'spesialis' => 'Penyakit Dalam'
            ]);
        }
    }
}
