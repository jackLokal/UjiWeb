<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;

    protected $table = 'log';
    protected $primaryKey = 'log_id';
    protected $fillable = ['transaksi_id', 'isi'];

    protected function log(){
        return $this->belongsTo(transaksi::class, 'transaksi id');
    }
}
