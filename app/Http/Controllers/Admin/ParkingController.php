<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParkingController extends Controller
{
    public function index (){
      $estacionamientos = \App\Programado::all();
      return view('admin.parkings.index', compact('estacionamientos'));
    }
}
