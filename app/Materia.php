<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
   public function user()
   {
     return $this->belongsTo('App\User');
   }
  protected $fillable = ['nombre_materia','crn','seccion','horario'];
}
