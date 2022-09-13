<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_jk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'jenis_kelamin',
    ];
    protected $table = 'ref_jenis_kelamin';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public static function getPend()
    {
        return DB::table('ref_pendidikan')
            ->select('*')
            ->get();
    }

    public static function getTrans()
    {
        return DB::table('ref_jenis_transportasi')
            ->select('*')
            ->get();
    }

    public static function getGoldar()
    {
        return DB::table('ref_gol_darah')
            ->select('*')
            ->get();
    }
}
