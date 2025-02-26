<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyeccion extends Model
{
    /** @use HasFactory<\Database\Factories\ProyeccionFactory> */
    use HasFactory;
//dar nombre a la tabla ya que no sigue convenio
    protected $table = 'proyecciones';

    protected $fillable = ['pelicula_id', 'fecha_hora', 'sala_id'];

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }
}
