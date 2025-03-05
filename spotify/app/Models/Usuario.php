<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /** @use HasFactory<\Database\Factories\UsuarioFactory> */
    use HasFactory;

    protected $fillable = ['nombre'];

    public function canciones (){
        return $this->belongsToMany(Cancion::class, 'cancion_usuario');
    }
}
