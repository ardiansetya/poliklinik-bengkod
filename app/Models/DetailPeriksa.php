<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPeriksa extends Model
{
    public function idPeriksa(): BelongsTo
    {
        return $this->belongsTo(Periksas::class, 'id_periksa');
    }
    public function idObat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }

    


}
