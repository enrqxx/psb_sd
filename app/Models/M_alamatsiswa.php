<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_alamatsiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'alamat_tempat_tinggal',
        'nik_calon_siswa',
        'rt',
        'rw',
        'dusun',
        'desa',
        'kecamatan',
        'kab',
        'prov',
        'kode_pos',
    ];
    protected $table = 'alamat_siswa';
    protected $primaryKey = 'id_alamat_siswa';
    public $timestamps = false;
}
