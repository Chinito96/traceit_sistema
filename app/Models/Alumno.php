<?php

namespace App\Models;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $timestamps  = false;
    protected $table = 'alumnos';

    public function calificaciones() {
        return $this->hasMany(Calificacion::class);
    }

    public function promedio() {
        $count = $this->calificaciones()->count();
        $sum = $this->calificaciones()->sum('calificacion');
        return $count == 0 ? 0 : $sum/$count;
    }
    
}
