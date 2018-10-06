@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Historial de Estacionamientos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item active">Historial</li>
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
             @if ($historiales->isEmpty())
               <a href="#" class="btn btn-outline-danger disabled pull-right"><i class="fa fa-file-pdf-o"></i> Exportar PDF</a>
             @else
               <a href="{{ route('admin.parkings.pdf') }}" class="btn btn-outline-danger pull-right"><i class="fa fa-file-pdf-o"></i> Exportar PDF</a>
             @endif

           </div>
         </div>
         <div class="card-body">
           <div class="card">
            <div class="card-body">
              <table id="parkings-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Dominio</th>
                  <th>Fecha</th>
                  <th>Hora Inicio</th>
                  <th>Hora Finalización</th>
                  <th>Monto $</th>
                  <th>Zona</th>
                  <th>Origen</th>
                  <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($historiales as $historial)
                    <tr>
                      <td>{{ $historial->vehiculo->dominio }}</td>
                      <td>{{ $historial->horaHasta->format('d/m/Y') }}</td>
                      <td>{{ $historial->horaDesde->format('H:i:s') }}</td>
                      <td>{{ $historial->horaHasta->format('H:i:s') }}</td>
                      <td>{{ $historial->monto }}</td>
                      <td>{{ $historial->zona->nombre }}</td>
                      <td>{{ $historial->origen->nombre }}</td>
                      <td>{{ $historial->estado }}</td>
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
