<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Periksas extends Model
{
    // protected $fillable = [
    //     'id_pasien',
    //     'id_dokter',
    //     'tanggal',
    //     'keluhan',
    //     'diagnosis',
    // ];

    public function pasiens(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_pasien');
    }

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }

    public function idPeriksa(): HasMany
    {
        return $this->hasMany(DetailPeriksa::class, 'id_periksa');
    }
    
}
