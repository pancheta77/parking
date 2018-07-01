<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParkingController extends Controller
{
    public function index (){
      $autos = \App\Vehiculo::all();
      return view('admin.parkings.index', compact('autos'));
    }
}
