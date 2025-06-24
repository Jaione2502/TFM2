<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Receta extends Model
{
    protected $table = 'recetas';

    protected $fillable = [
        'usuario_id', 'categoria_id', 'titulo', 'descripcion', 'tiempo_preparacion', 'dificultad', 'imagen',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class);
    }

    public function ingredientes(): BelongsToMany
    {
        return $this->belongsToMany(Ingrediente::class, 'receta_ingrediente')
                    ->withPivot('cantidad', 'unidad_custom');
    }

    public function etiquetas(): BelongsToMany
    {
        return $this->belongsToMany(Etiqueta::class, 'receta_etiqueta');
    }

    public function usuariosQueLaFavoritaron(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'recetas_favoritas')->withTimestamps();
    }
}
