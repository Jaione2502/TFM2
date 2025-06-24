<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';

    protected $fillable = ['nombre', 'unidad'];

    public function recetas(): BelongsToMany
    {
        return $this->belongsToMany(Receta::class, 'receta_ingrediente')
                    ->withPivot('cantidad', 'unidad_custom');
    }
}