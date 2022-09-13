<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_transportasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_jenis_transportasi',
        'nama_transportasi'
    ];
    protected $table = 'ref_jenis_transportasi';
    protected $primaryKey = 'id_jenis_transportasi';
    public $timestamps = false;
}
