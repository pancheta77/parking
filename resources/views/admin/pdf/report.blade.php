@extends('admin.templatePdf')

@section('content')
  <div class="row">
    <div class="col-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>Dominio</th>
          <th>Hora Inicio</th>
          <th>Hora Finalización</th>
          <th>Zona</th>
          <th>Origen</th>
          <th>Estado</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($estacionamientos as $estacionamiento)
            <tr>
              <td>{{ $estacionamiento->vehiculo->dominio }}</td>
              <td>{{ $estacionamiento->horaDesde->format('H:i:s') }}</td>
              <td>{{ $estacionamiento->horaHasta->format('H:i:s') }}</td>
              <td>{{ $estacionamiento->zona->nombre }}</td>
              <td>{{ $estacionamiento->origen->nombre }}</td>
              <td>{{ $estacionamiento->estado }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
@stop
