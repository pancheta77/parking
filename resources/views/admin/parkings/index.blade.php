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
           <a href="#" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Iniciar estacionamiento</a>
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
                  <th>Zona</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody> 
                  @foreach ($estacionamientos as $estacionamiento)
                    <tr>
                      <td>{{ $estacionamiento->vehiculo->dominio }}</td>
                      <td>{{ $estacionamiento->horaDesde->format('H:i:s') }}</td>
                      <td>{{ $estacionamiento->horaHasta->format('H:i:s') }}</td>
                      <td>{{ $estacionamiento->zona->nombre }}</td>
                      <td><a href="#" class="btn btn-danger btn.xs"><i class="fa fa-trash"></i></a></td>
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
