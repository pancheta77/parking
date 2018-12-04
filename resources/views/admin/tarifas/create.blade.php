@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ingresar tarifa nueva</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item"><a href="#">Inspectores</a></li>
          <li class="breadcrumb-item active">Nuevo</li>
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
             <form method="POST" action="{{ route('admin.tarifas.store') }}">
               {{ csrf_field() }}
               <div class="card-body">
                <div class="form-group {{ $errors->has('nombre') ? ' is-invalid' : '' }}">
                  <label>Nombre <span class="text-danger">*</span></label>
                  <input name="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Ingrese el nombre descriptivo">
                  {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('valor_base') ? ' is-invalid' : '' }}">
                  <label>Valor base <span class="text-danger">*</span></label>
                  <input name="valor_base" value="{{ old('valor_base') }}" class="form-control" placeholder="Ingrese valor base de la tarifa ">
                  {!! $errors->first('valor_base', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('tasa') ? ' is-invalid' : '' }}">
                  <label>Tasa de incremento <span class="text-danger">*</span></label>
                  <input name="tasa" value="{{ old('tasa') }}" class="form-control" placeholder="Ingrese tasa en porcentaje">
                  {!! $errors->first('tasa', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group">
                  <label><span class="text-danger">(*) Obligatorio</span></label>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary pull-left">Guardar</button>
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
