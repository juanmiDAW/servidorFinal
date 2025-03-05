<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    /** @use HasFactory<\Database\Factories\CancionFactory> */
    use HasFactory;

    protected $table = 'canciones';

    protected $filalble = ['cancion','duracion'];

    public function albumes(){
        return $this->belongsToMany(Album::class, 'album_cancion','cancion_id', 'album_id');
    }
}
