<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episodio extends Model
{
    public function temporada()
    {
        return $this->belongsTo(Temporada::class);
    }
}
