<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estacionamiento;

class ParkingController extends Controller
{
    public function index (){
      $estacionamientos = Estacionamiento::all();
      return view('admin.parkings.index', compact('estacionamientos'));
    }
}
