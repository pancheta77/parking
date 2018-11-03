@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Agregar Saldo</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item"><a href="#">Usuario</a></li>
          <li class="breadcrumb-item active">Saldo</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@stop

@section('content')
  <div class="container-fluid">
   <div class="row">
     <div class="col-lg-6">
       <div class="card card-primary card-outline">
         <div class="card-body">
           <div class="card">
             <form method="POST" action="{{ route('admin.users.update', $usuario) }}">
               {{ csrf_field() }} {{ method_field('PUT') }}
               <div class="card-body">
                <div class="form-group">
                  <label>Nombre</label>
                  <input name="name" value="{{ old('name', $usuario->name) }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Correo electrónico</label>
                  <input name="email" value="{{ old('email', $usuario->email) }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Se acreditará en cuenta Nº</label>
                  <input name="numero " value="{{ old('numero ', $usuario->cuenta->numero ) }}" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Saldo actual</label>
                  <input name="saldo" value="{{ old('saldo', $usuario->cuenta->saldo) }}" class="form-control" readonly>
                </div>
                <div class="form-group {{ $errors->has('monto') ? ' is-invalid' : '' }}">
                  <label>Monto a cargar</label>
                  <input name="monto" class="form-control" placeholder="Ingrese monto a cargar">
                  {!! $errors->first('monto', '<span class="text-danger">:message</span>') !!}
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary pull-left">Acreditar</button>
                </div>
              </div>
            </form>
            <!-- /.card-body -->
          </div>
         </div>
       </div>
     </div>
     <!-- /.col-md-6 -->
   </div>
   <!-- /.row -->
 </div><!-- /.container-fluid -->
@stop
