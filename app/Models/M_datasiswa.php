<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_datasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_data_siswa',
        'nama_lengkap',
        'tanggal_lahir',
        'tempat_lahir',
        'agama',
        'nik',
        'anak_ke',
        'bahasa_sehari',
        'kewarganegaraan',
        'jk',
        'status',
        'foto'
    ];
    protected $table = 'datasiswa';
    protected $primaryKey = 'id_data_siswa';
    public $timestamps = false;

    public static function pendidikan()
    {
        return DB::table('ref_pendidikan')
            ->select('*')
            ->get();
    }

    public static function detail($id_data_siswa)
    {
        return DB::table('datasiswa')
            ->select('*')
            ->join('alamat_siswa', 'alamat_siswa.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('ifrmdidikbaru', 'ifrmdidikbaru.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('jasmani_saba', 'jasmani_saba.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('kontak_orang_tua_wali', 'kontak_orang_tua_wali.nik_calon_siswa', '=', 'datasiswa.nik')
            ->where('id_data_siswa', $id_data_siswa)
            ->first();
    }

    public static function allSiswa()
    {
        return DB::table('datasiswa')
            ->select('*')
            ->join('alamat_siswa', 'alamat_siswa.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('data_ayah', 'data_ayah.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('data_ibu', 'data_ibu.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('ifrmdidikbaru', 'ifrmdidikbaru.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('jasmani_saba', 'jasmani_saba.nik_calon_siswa', '=', 'datasiswa.nik')
            ->join('kontak_orang_tua_wali', 'kontak_orang_tua_wali.nik_calon_siswa', '=', 'datasiswa.nik')
            ->leftjoin('wali_murid', 'wali_murid.nik_calon_siswa', '=', 'datasiswa.nik')
            ->orderBy('id_data_siswa', "asc")
            ->get();
    }
}
