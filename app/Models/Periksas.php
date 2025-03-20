<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Periksas extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal',
        'keluhan',
        'diagnosis',
    ];
public function pasiens(): HasMany {
    return $this->hasMany(Periksa::class, 'id_pasiens');
}
    
}
