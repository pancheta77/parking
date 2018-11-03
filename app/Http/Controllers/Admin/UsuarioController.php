<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Cuenta;
use App\Movimiento;
use Carbon\Carbon;

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

    $usuario->cuenta->saldo = ($usuario->cuenta->saldo + $request->get('monto'));
    $usuario->cuenta->save();

    //Registrar el movimiento
    $mov = new Movimiento;
    $mov->cuentaId = $usuario->cuentaId;
    $mov->fechaOperacion = Carbon::now();
    $mov->monto = $request->get('monto');
    $mov->disponible = $usuario->cuenta->saldo;
    $mov->motivo = 'Credito-Saldo';
    $mov->save();

    return redirect()->route('admin.users.index')->with('flash', 'El monto ha sido acreditado');
  }

  public function movimientos (User $usuario){
    $movimientos = Movimiento::where('cuentaId', $usuario->cuentaId)->orderBy('fechaOperacion')->get();
    return view('admin.users.movimientos', compact('movimientos'));
  }
}
