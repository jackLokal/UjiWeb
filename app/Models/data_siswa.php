<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    use HasFactory;

    protected $table = 'data_siswa';
    protected $primaryKey = 'siswa_id';
    protected $fillable = ['siswa_id', 'user_id', 'nisn', 'nama', 'tempat_lahir', 'tanggal_lahir', 'kelamin', 'tanggal_masuk'];

    protected function user(){
        return $this->belongsTo(admin::class, 'user_id');
    }
}
