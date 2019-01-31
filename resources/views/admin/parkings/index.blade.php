@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Listado de Estacionamientos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item active">Estacionamientos</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@stop

@section('content')
  <div class="container-fluid">
   <div class="row">
     <div class="col-lg-12">
       <div class="card card-primary card-outline">
         <div class="card-header">
           <div class="col-md-12">
              <a href="{{ route('admin.parkings.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Iniciar estacionamiento</a>
              <div class="btn-group">
                @if ($estacionamientos->isNotEmpty())
                  <form method="POST" action="{{ route('admin.parkings.destroy') }}" style="display: inline">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button onclick="return confirm ('Esta a punto de finalizar todos los estacionamientos. ¿Está seguro?')" class="btn btn-warning pull-left"><i class="fa fa-exclamation-triangle"></i> Finalizar Horario de todos los estacionamientos</button>
                  </form>
                @endif
              </div>
              <div class="btn-group">
                <a href="{{ route('admin.parkings.historial') }}" class="btn btn-info"><i class="fa fa-history"></i> Historial estacionamientos</a>
              </div>
           </div>


         </div>
         <div class="card-body">
           <div class="card">
            <div class="card-body">
              <table id="parkings-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Dominio</th>
                  <th>Hora Inicio</th>
                  <th>Hora Finalización</th>
                  {{-- <th>Monto $</th> --}}
                  <th>Zona</th>
                  <th>Origen</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($estacionamientos as $estacionamiento)
                    <tr>
                      <td>{{ $estacionamiento->vehiculo->dominio }}</td>
                      <td>{{ $estacionamiento->horaDesde->format('H:i:s') }}</td>
                      @if ( $estacionamiento->horaHasta != null )
                        <td>{{ $estacionamiento->horaHasta->format('H:i:s') }}</td>
                      @else
                        <td> - </td>
                      @endif
                      {{-- @if ( $estacionamiento->monto != 0 )
                        <td>{{ $estacionamiento->monto }}</td>
                      @else
                        <td>-</td>
                      @endif --}}
                      <td>{{ $estacionamiento->zona->nombre }}</td>
                      <td>{{ $estacionamiento->origen->nombre }}</td>
                      <td>{{ $estacionamiento->estado }}</td>
                      <td>
                        @if ($estacionamiento->estado != 'Finalizado')
                          <a href="{{ route('admin.parkings.finish', $estacionamiento) }}" onclick="return confirm ('¿Desea finalizar el estacionamiento?')" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

         </div>
       </div>
     </div>
     <!-- /.col-md-12 -->
   </div>
   <!-- /.row -->
 </div><!-- /.container-fluid -->

@stop
