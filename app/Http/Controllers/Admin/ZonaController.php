<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Zona;
use App\Tarifa;


class ZonaController extends Controller
{
  public function index()
  {
      $zonas = Zona::all();
      return view('admin.zonas.index', compact('zonas'));
  }

  public function create()
  {
      $tarifas = Tarifa::all();
      return view('admin.zonas.create', compact('tarifas'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'descripcion' => 'required',
      'tarifaId' => 'required',
    ]);
    Zona::create($request->all());

    return redirect()->route('admin.zonas.index')->with('flash', 'El zona ha sido guardado correctamente');
  }

  public function edit(Zona $zona)
  {
      $tarifas = Tarifa::all();
      return view('admin.zonas.edit', compact('zona', 'tarifas'));
  }

  public function update(Request $request, Zona $zona)
  {
    $this->validate($request, [
      'nombre' => 'required',
      'descripcion' => 'required',
      'tarifaId' => 'required',
    ]);
    $zona->fill($request->all());
    $zona->save();
    return redirect()->route('admin.zonas.index')->with('flash', 'El zona ha sido actualizado correctamente');
  }

  public function destroy(Zona $zona)
  {
      $zona->delete();
      return redirect()->route('admin.zonas.index')->with('flash', 'El inspector ha sido borrado correctamente');
  }
}
