<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /** @use HasFactory<\Database\Factories\AlbumFactory> */
    use HasFactory;
    protected $table = 'albumes';

    protected $fillable = ['nombre', 'durecion'];
    
    public function canciones(){
        return $this->belongsToMany(Cancion::class, 'album_cancion', 'album_id', 'cancion_id');
    }

    public function artistas(){
        return $this->belongsToMany(Artista::class, 'album_artista', 'album_id', 'artista_id');
    }

}
