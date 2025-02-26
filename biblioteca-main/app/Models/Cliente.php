<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;

    public function ejemplares(){
        return $this->belongsToMany(Ejemplar::class, 'prestamos')
                            ->withPivot('fecha_hora', 'fecha_hora_devolucion');
    }
}
