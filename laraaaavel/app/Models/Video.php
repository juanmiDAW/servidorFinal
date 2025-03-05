<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\Volt\Exceptions\ReturnNewClassExecutionEndingException;

class Video extends Model
{
    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasFactory;

    protected $fillable = ['titulo'];

    public function comentarios(){
        return $this->morphMany(Comentario::class, 'comentable');
    }
}
