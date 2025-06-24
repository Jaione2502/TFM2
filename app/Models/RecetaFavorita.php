<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RecetaFavorita extends Pivot
{
    protected $table = 'recetas_favoritas';

    protected $fillable = ['usuario_id', 'receta_id'];
}
