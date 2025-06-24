<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etiqueta extends Model
{
    protected $table = 'etiquetas';

    protected $fillable = ['nombre'];

    public function recetas(): BelongsToMany
    {
        return $this->belongsToMany(Receta::class, 'receta_etiqueta');
    }
}