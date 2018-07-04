<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $estacionamientos = \App\Programado::all();
      return view('web', compact('estacionamientos'));
    }
}
