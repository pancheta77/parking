@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Listado de movimientos de cuenta</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item active">Movimientos</li>
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
         <div class="card-body">
           <div class="card">
            <div class="card-body">
              <table id="parkings-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Número Cuenta</th>
                  <th>Fecha de operación</th>
                  <th>Monto $</th>
                  <th>Saldo disponible $</th>
                  <th>Motivo</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($movimientos as $movimiento)
                    <tr>
                      <td>{{ $movimiento->cuenta->numero }}</td>
                      <td>{{ $movimiento->fechaOperacion->format('d/m/Y H:m:s') }}</td>
                      @if ($movimiento->motivo == 'Credito-Saldo' || $movimiento->motivo == 'CargaInicial')
                        <td>{{ $movimiento->monto }}</td>
                      @else
                        <td>- {{ $movimiento->monto }}</td>
                      @endif
                      <td>{{ $movimiento->disponible }}</td>
                      <td>{{ $movimiento->motivo }}</td>

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
