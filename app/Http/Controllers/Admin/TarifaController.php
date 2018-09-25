<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tarifa;

class TarifaController extends Controller
{
    public function index(){
      $tarifas = Tarifa::all();
      return view('admin.tarifas.index', compact('tarifas'));
    }

    public function create()
    {
        return view('admin.tarifas.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required',
        'valor_base' => 'numeric|required',
        'tasa' => 'required|integer',
      ]);
      Tarifa::create($request->all());

      return redirect()->route('admin.tarifas.index')->with('flash', 'La tarifa ha sido guardado correctamente');
    }

    public function edit(Tarifa $tarifa)
    {
        return view('admin.tarifas.edit', compact('tarifa'));
    }

    public function update(Request $request, Tarifa $tarifa)
    {
      $this->validate($request, [
        'nombre' => 'required',
        'valor_base' => 'numeric|required',
        'tasa' => 'required|integer',
      ]);
      $tarifa->fill($request->all());
      $tarifa->save();
      return redirect()->route('admin.tarifas.index')->with('flash', 'El tarifa ha sido actualizada correctamente');
    }

    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();
        return redirect()->route('admin.tarifas.index')->with('flash', 'El inspector ha sido borrado correctamente');
    }
}
