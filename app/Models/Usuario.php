<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre', 'email', 'contraseña', 'rol',
    ];

    protected $hidden = ['contraseña'];

    public function recetas(): HasMany
    {
        return $this->hasMany(Receta::class);
    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class);
    }

    public function recetasFavoritas(): BelongsToMany
    {
        return $this->belongsToMany(Receta::class, 'recetas_favoritas')->withTimestamps();
    }
}
