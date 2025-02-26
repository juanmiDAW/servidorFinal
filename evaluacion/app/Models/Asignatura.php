<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    /** @use HasFactory<\Database\Factories\AsignaturaFactory> */
    use HasFactory;

    protected $fillable = ['codigo','denominacion'];

    public function notas(){
        return $this->hasMany(Nota::class);
    }
}
