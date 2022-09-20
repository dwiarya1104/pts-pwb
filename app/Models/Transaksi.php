<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jenis'
    ];

    public function pembayaran_listrik()
    {
        return $this->belongsTo(PembayaranListrik::class);
    }

    public function tarik_tunai()
    {
        return $this->belongsTo(TarikTunai::class);
    }
    public function transfer()
    {
        return $this->belongsTo(Transfer::class);
    }
}
