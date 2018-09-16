<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
  public function usuario (){
    return $this->belongsTo(User::class, 'userId');
  }
}
