<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /** @use HasFactory<\Database\Factories\NotaFactory> */
    use HasFactory;

    protected $fillable = ['nota'];

    public function ccee(){
        return $this->belongsTo(Ccee::class);
    }

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }
}

