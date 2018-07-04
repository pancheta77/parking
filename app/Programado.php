<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programado extends Model
{
  protected $dates = ['horaDesde', 'horaHasta'];

  public function vehiculo(){
    return $this->belongsTo(Vehiculo::class);
  }

  public function zona(){
    return $this->belongsTo(Zona::class);
  }
}
