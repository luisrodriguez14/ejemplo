<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   public function user()
   {
     return $this->belongsTo('App\User');
   }
  protected $fillable = ['nombre_alumno','codigo','carrera'];
}
