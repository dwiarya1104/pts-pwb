<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarikTunai extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaksi_id',
        'nominal',
        'user_id'
    ];

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}
