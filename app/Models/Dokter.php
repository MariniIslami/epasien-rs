<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'poli_id',
        'nama_dokter',
        'spesialis',
    ];

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }

    public function jadwal()
    {
        return $this->hasMany(JadwalDokter::class);
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
