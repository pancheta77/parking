<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
  protected $guarded = [];
  
  public function tarifa (){
    return $this->belongsTo(Tarifa::class, 'tarifaId');
  }
}
