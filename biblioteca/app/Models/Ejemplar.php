<?php

namespace App\Models;

use Database\Seeders\EjemplarSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    /** @use HasFactory<\Database\Factories\EjemplarFactory> */
    use HasFactory;
//se le dice como se llama la tabla ya que no sigue el convenio
    protected $table = 'ejemplares';

    //el nombre de la uncion deberia de estar en singular ya que pertenece a un libro lo cual es en singular libro
    //si se llama a la funcion en plural unciona igual, pero es para seguir con el convenio de laravel.
    public function libros(){
        return $this->belongsTo(Ejemplar::class);
    }

    //en el metodo belongsToMany(relacion, nombre no convenio) si la tabla no sigue el convenio se mete como segundo parametro
    public function clientes(){
        return $this->belongsToMany(Cliente::class, 'prestamos')->withPivot('fecha_hora', 'fecha_hora_devolucion');
    }
}
