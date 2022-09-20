<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranListrik extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaksi_id',
        'nomor_pelanggan',
        'nominal',
        'user_id'
    ];

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}
