<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTarifaRequest;
use App\Tarifa;
use Illuminate\Http\Request;

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
        'nombre' => 'required|unique:tarifas',
        'valor_base' => 'integer|min:1|required',
        'tasa' => 'required|integer|min:0',
      ]);
      Tarifa::create($request->all());

      return redirect()->route('admin.tarifas.index')->with('flash', 'La tarifa ha sido guardado correctamente');
    }

    public function edit(Tarifa $tarifa)
    {
        return view('admin.tarifas.edit', compact('tarifa'));
    }

    public function update(UpdateTarifaRequest $request, $id)
    {
      // dd($request);
      $tarifa = Tarifa::findOrFail($id);
      $tarifa->update($request->all());
      // $tarifa->save();
      return redirect()->route('admin.tarifas.index')->with('flash', 'El tarifa ha sido actualizada correctamente');
    }

    public function destroy(Tarifa $tarifa)
    {
        // dd($tarifa);
        // $tarifa->delete();
        $tarifa->estado = 'Borrada';
        $tarifa->save();
        return redirect()->route('admin.tarifas.index')->with('flash', 'La tarifa ha sido borrada correctamente');
    }

    public function reload(Tarifa $tarifa){
      $tarifa->estado = 'Activa';
      $tarifa->save();
      return redirect()->route('admin.tarifas.index')->with('flash', 'La tarifa ha sido reactivada correctamente');
    }
}
