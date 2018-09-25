@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Modicar tarifa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item"><a href="#">Tarifas</a></li>
          <li class="breadcrumb-item active">Modificar</li>
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
             <form method="POST" action="{{ route('admin.tarifas.update', $tarifa) }}">
               {{ csrf_field() }} {{ method_field('PUT') }}
               <div class="card-body">
                <div class="form-group {{ $errors->has('nombre') ? ' is-invalid' : '' }}">
                  <label>Nombre</label>
                  <input name="nombre" value="{{ old('nombre', $tarifa->nombre) }}" class="form-control" placeholder="Ingrese nombre descriptivo">
                  {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('valor_base') ? ' is-invalid' : '' }}">
                  <label>Valor Base</label>
                  <input name="valor_base" value="{{ old('valor_base', $tarifa->valor_base) }}" class="form-control" placeholder="Ingrese valorbase del estaciomiento">
                  {!! $errors->first('valor_base', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('tasa') ? ' is-invalid' : '' }}">
                  <label>Legajo</label>
                  <input name="tasa" value="{{ old('tasa', $tarifa->tasa) }}" class="form-control" placeholder="Ingrese porcentaje de tasa">
                  {!! $errors->first('tasa', '<span class="text-danger">:message</span>') !!}
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary pull-left">Actualizar</button>
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
