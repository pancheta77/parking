<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estacionamiento;

class PagesController extends Controller
{
    public function index(){
      $estacionamientos = Estacionamiento::all();
      return view('web', compact('estacionamientos'));
    }
}
