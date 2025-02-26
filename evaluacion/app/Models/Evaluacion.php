<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    /** @use HasFactory<\Database\Factories\EvaluacionFactory> */
    use HasFactory;

    /**Para decir que la tabla no sigue la convencio de Laravel */
    protected $table = 'evaluaciones';

    protected $fillable = ['evaluacion'];

    public function notas(){
        return $this->hasMany(Nota::class);
    }
}
