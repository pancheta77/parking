@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Listado de Tarifas</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item active">Tarifas</li>
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
              <a href="{{ route('admin.tarifas.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Agregar tarifa</a>
           </div>


         </div>
         <div class="card-body">
           <div class="card">
            <div class="card-body">
              <table id="parkings-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Valor Base</th>
                  <th>Tasa de incremento</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($tarifas as $tarifa)
                    <tr>
                      <td>{{ $tarifa->nombre }}</td>
                      <td>{{ $tarifa->valor_base }}</td>
                      <td>{{ $tarifa->tasa }}</td>
                      <td>
                          <a href="{{ route('admin.tarifas.edit', $tarifa) }}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                          <form method="POST" action="{{ route('admin.tarifas.destroy', $tarifa) }}" style="display: inline">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                            <button onclick="return confirm ('¿Esta seguro de borrar la tarifa?')" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                          </form>
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
