<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ccee extends Model
{
    /** @use HasFactory<\Database\Factories\CceeFactory> */
    use HasFactory;

    protected $fillable =['ce', 'descripcion'];

    /**Dice que nombre será la tabla ya que no sigue el convenio de Laravel */
    protected $table ='ccee';

    public function notas(){
        return $this->hasMany(Nota::class);
    }
}
