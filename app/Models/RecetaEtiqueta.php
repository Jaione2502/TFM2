<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RecetaEtiqueta extends Pivot
{
    protected $table = 'receta_etiqueta';

    protected $fillable = ['receta_id', 'etiqueta_id'];
}