<?php

namespace App\Http\Controllers\Admin;

use App\Inspector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        'apellido' => 'required',
        'nombre' => 'required',
        'legajo' => 'required|integer|min:4|max:10',
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
        'apellido' => 'required',
        'nombre' => 'required',
        'legajo' => 'required|min:4|integer',
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
