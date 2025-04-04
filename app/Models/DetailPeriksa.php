<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPeriksa extends Model
{
    protected $table = 'detail_periksa';
    protected $fillable = ['id_periksa', 'id_obat'];
    public function periksa(): BelongsTo
    {
        return $this->belongsTo(Periksas::class, 'id_periksa');
    }
    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }

    


}
