<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = "transaksi_id";
    protected $fillable = ['transaksi_id', 'user_id', 'no_transaksi', 'tanggal_pembayaran', 'bulan_spp', 'biaya_spp', 'biaya_terbayar', 'bukti_bayar'];

    protected function user(){
        return $this->belongsTo(admin::class, 'user_id');
    }
}
