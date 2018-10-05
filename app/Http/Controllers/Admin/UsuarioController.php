<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioController extends Controller
{
  public function index (){
    $usuarios = User::all();
    return view('admin.users.index', compact('usuarios'));
  }

  public function agregarSaldo(User $usuario){
    return view('admin.users.add', compact('usuario'));
  }

  public function update(Request $request, User $usuario){
    $this->validate($request, [
      'monto' => 'required|integer|min:1',
    ]);
    $usuario->saldo = ($usuario->saldo + $request->get('monto'));
    $usuario->save();
    return redirect()->route('admin.users.index')->with('flash', 'El monto ha sido acreditado');
  }
}
