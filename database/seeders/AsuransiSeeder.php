<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asuransi;

class AsuransiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'BPJS Kesehatan',
            'ASABRI',
            'Jasa Raharja',
            'Mandiri InHealth',
            'Prudential',
        ];

        foreach ($data as $asuransi) {
            Asuransi::create([
                'nama_asuransi' => $asuransi
            ]);
        }
    }
}
