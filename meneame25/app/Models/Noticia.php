<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    /** @use HasFactory<\Database\Factories\NoticiaFactory> */
    use HasFactory;

    protected $fillable = ['titulo', 'entradilla', 'imagen','categoria_id','usuario_id','meneos'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
