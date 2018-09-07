<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacionamiento extends Model
{
  protected $dates = ['horaDesde', 'horaHasta'];

  public function vehiculo(){
    return $this->belongsTo(Vehiculo::class, 'vehiculoId');
  }

  public function zona(){
    return $this->belongsTo(Zona::class, 'zonaId');
  }

  public function origen(){
    return $this->belongsTo(Origen::class, 'origenId');
  }
}
