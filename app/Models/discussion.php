<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discussion extends Model
{
    use HasFactory;

    protected $table = 'discussion';
    protected $primaryKey = 'disc_id';
    protected $fillable = ['disc_id', 'user_id', 'tranksaksi_id', 'komentar'];

    protected function user(){
        return $this->belongsTo(admin::class, 'user_id');
    }

    protected function transaksi(){
        return $this->belongsTo(transaksi::class, 'transaksi_id');
    }
}
