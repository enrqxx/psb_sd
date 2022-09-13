<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_pendidikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_pendidikan',
    ];
    protected $table = 'ref_pendidikan';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
