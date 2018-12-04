<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inspector;

class InspectorController extends Controller
{
    public function index()
    {
        $inspectors = Inspector::all();
        return view('admin.inspectores.index', compact('inspectors'));
    }

    public function create()
    {
        return view('admin.inspectores.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'apellido' => 'required|unique:inspectors',
        'nombre' => 'required',
        'legajo' => 'integer|required',
      ]);
      Inspector::create($request->all());
      return redirect()->route('admin.inspectores.index')->with('flash', 'El inspector ha sido guardado correctamente');
    }

    public function edit(Inspector $inspector)
    {
        return view('admin.inspectores.edit', compact('inspector'));
    }

    public function update(Request $request, Inspector $inspector)
    {
      $this->validate($request, [
        'apellido' => 'required|unique:inspectors',
        'nombre' => 'required',
        'legajo' => 'integer|required',
      ]);
      $inspector->fill($request->all());
      $inspector->save();
      return redirect()->route('admin.inspectores.index')->with('flash', 'El inspector ha sido actualizado correctamente');
    }

    public function destroy(Inspector $inspector)
    {
        $inspector->delete();
        return redirect()->route('admin.inspectores.index')->with('flash', 'El inspector ha sido borrado correctamente');
    }
}
