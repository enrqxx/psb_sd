<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_siswaTerima extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_data_siswa',
        'nik_siswa',
        'status',
        'diterima_di',
        'tampil',
    ];
    protected $table = 'tbl_siswa_terima';
    protected $primaryKey = 'id_siswa_terima';
    public $timestamps = false;
}
