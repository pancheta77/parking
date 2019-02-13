<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateZonaRequest;
use App\Tarifa;
use App\Zona;
use Illuminate\Http\Request;


class ZonaController extends Controller
{
  public function index()
  {
      $zonas = Zona::all();
      return view('admin.zonas.index', compact('zonas'));
  }

  public function create()
  {
      $tarifas = Tarifa::where('estado', 'Activa')->get();
      return view('admin.zonas.create', compact('tarifas'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required|unique:zonas',
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

  public function update(UpdateZonaRequest $request, $id)
  {
    $zona = Zona::findOrFail($id);
    $zona->update($request->all());
    return redirect()->route('admin.zonas.index')->with('flash', 'El zona ha sido actualizado correctamente');
  }

  public function destroy(Zona $zona)
  {
      // $zona->delete();
      $zona->estado = 'Borrada';
      $zona->save();
      return redirect()->route('admin.zonas.index')->with('flash', 'La zona ha sido borrada correctamente');
  }

  public function reload(Zona $zona){
    $zona->estado = 'Activa';
    $zona->save();
    return redirect()->route('admin.zonas.index')->with('flash', 'La zona ha sido reactivada correctamente');
  }
}
