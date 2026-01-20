<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'pendaftaran_id',
        'jenis',
        'asuransi_id',
        'nomor_kartu',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }

    public function asuransi()
    {
        return $this->belongsTo(Asuransi::class);
    }
}
