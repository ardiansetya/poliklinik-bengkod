<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Obat extends Model
{
    public function idObat(): HasMany
    {
        return $this->hasMany(DetailPeriksa::class, 'id_obat');
    }
}
