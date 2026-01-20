<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asuransi extends Model
{
    use HasFactory;

    protected $table = 'asuransi';

    protected $fillable = [
        'nama_asuransi',
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
