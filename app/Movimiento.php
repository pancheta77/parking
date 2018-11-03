<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $guarded = [];

    protected $dates = ['fechaOperacion'];

    public function cuenta(){
      return $this->belongsTo(Cuenta::class, 'cuentaId');
    }
}
