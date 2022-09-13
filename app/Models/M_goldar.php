<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_goldar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_goldar',
        'goldar',
    ];
    protected $table = 'ref_gol_darah';
    protected $primaryKey = 'id_goldar';
    public $timestamps = false;
}
