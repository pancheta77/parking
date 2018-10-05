@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Listado de Usuarios</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item active">Usuarios</li>
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
                  <th>Nombre y Apellido</th>
                  <th>Correo electrónico</th>
                  <th>Celular</th>
                  <th>Saldo $</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($usuarios as $usuario)
                    <tr>
                      @if ( $usuario->name != null )
                        <td>{{ $usuario->name }}</td>
                      @else
                        <td> - </td>
                      @endif
                      @if ( $usuario->email != null )
                        <td>{{ $usuario->email }}</td>
                      @else
                        <td> - </td>
                      @endif
                      <td>{{ $usuario->celular }}</td>
                      <td>{{ $usuario->saldo }}</td>
                      <td><a href="{{ route('admin.users.agregarSaldo', $usuario) }}" class="btn btn-success btn.xs"><i class="fa fa-cart-plus"></i></a></td>
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
