<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estacionamiento;
use App\Zona;
use App\Origen;
use App\Vehiculo;
use App\User;
use Carbon\Carbon;

class ParkingController extends Controller
{
    public function index (){
      $estacionamientos = Estacionamiento::orderBy('horaDesde')->get();
      return view('admin.parkings.index', compact('estacionamientos'));
    }

    public function create(){
      $users = User::all();
      $zonas = Zona::all();
      $origenes = Origen::all();
      return view('admin.parkings.create', compact('users', 'zonas', 'origenes'));
    }

    public function store(Request $request){
      // dd($request);
      $this->validate($request, [
        'dominio' => 'required|min:6|max:7',
        'tiempo' => 'nullable|between:[1,13]',
        'zonaId' => 'required',
        'userId' => 'required',
        'origenId' => 'required',
      ]);
      $usuario = User::find($request->get('userId'));
      $zona = Zona::find($request->get('zonaId'));
      if ($usuario->saldo >= $zona->tarifa->valor_base) {
        $auto = new Vehiculo;
        $auto->dominio = strtoupper($request->get('dominio'));
        $auto->userId = $request->get('userId');
        $auto->save();
        //Creación de un estacionamiento nuevo
        $estacionamiento = new Estacionamiento;
        $estacionamiento->vehiculoId = $auto->id;
        $horaActual = Carbon::now();
        $estacionamiento->horaDesde = $horaActual;
        $estacionamiento->horaHasta = $request->filled('tiempo') ? $horaActual->addHours($request->get('tiempo')) : null;
        $estacionamiento->zonaId = $request->get('zonaId');
        $estacionamiento->origenId = $request->get('origenId');
        $estacionamiento->monto = 0;
        $estacionamiento->estado = 'Activo';
        $estacionamiento->save();

        return redirect()->route('admin.parkings.index')->with('flash', 'El estacionamiento ha sido iniciado correctamente');
      }
      else {
        return redirect()->route('admin.parkings.index')->with('flash-warn', 'El usuario no tiene suficiente saldo');
      }
    }

    public function finish (Estacionamiento $estacionamiento) {
      $horaFin = Carbon::now();
      $horaInicio = $estacionamiento->horaDesde;
      $diffHoraria = $horaFin->diffInSeconds($estacionamiento->horaDesde);
      $diffHoraria = (($diffHoraria / 60) / 60); //tiempo calculo en horas
      $tiempoHoraEntera = floor($diffHoraria); //hora parte entera
      $estacionamiento->horaDesde = $horaInicio;
      $estacionamiento->horaHasta = $horaFin;
      if ($tiempoHoraEntera == 0) {
        $estacionamiento->monto = ($estacionamiento->zona->tarifa->valor_base); //menos de una hora
      }
      else {
        $estacionamiento->monto = (($estacionamiento->zona->tarifa->valor_base * $tiempoHoraEntera) * (($estacionamiento->zona->tarifa->tasa / 100) + 1));
      }
      $estacionamiento->estado = 'Finalizado';

      $usuario = User::find($estacionamiento->vehiculo->userId);
      $usuario->saldo = $usuario->saldo - $estacionamiento->monto;
      $usuario->save();
      // dd($estacionamiento);
      $estacionamiento->save();

      return redirect()->route('admin.parkings.index')->with('flash', 'El estacionamiento ha sido finalizado');
    }

    public function destroy(){
      $estacionamientos = Estacionamiento::all();
      foreach ($estacionamientos as $estacionamiento) {
        $estacionamiento->vehiculo()->delete();
        $estacionamiento->delete();
      }

      return redirect()->route('admin.parkings.index')->with('flash', 'Los estacionamiento de la jornada han sido finalizados y borrados');
    }

}
