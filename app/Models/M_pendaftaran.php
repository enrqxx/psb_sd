<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_daftar',
        'nama',
        'ket',
        'active',
        'tampil'
    ];
    protected $table = 'tbl_daftar_aktivasi';
    protected $primaryKey = 'id_daftar';
    public $timestamps = false;

    public static function getDaftar()
    {
        return DB::table('tbl_daftar_aktivasi')
            ->select('*')
            ->first();
    }

    public static function hitungPendaftar()
    {
        return DB::table('datasiswa')
            ->select(DB::raw('COUNT(*) as jumlah'))
            ->get();
    }
}
